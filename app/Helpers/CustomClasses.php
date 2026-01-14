<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class CustomClasses
{
    /**
     * Vérifie si le lien symbolique de stockage existe, sinon le crée.
     */
    public static function storageLinkExists()
    {
        if (!is_link(public_path('storage'))) {
            Artisan::call('storage:link');
            echo 'Storage link created.' . PHP_EOL;
        } else {
            echo 'Storage link already exists.' . PHP_EOL;
        }
    }

    /**
     * Convertit les octets en gigaoctets.
     *
     * @param int $bytes
     * @return string
     */
    public static function convertBytesToGigaBytes(int $bytes): string
    {
        $gigaBytes = $bytes / 1073741824;
        return number_format($gigaBytes, 2, '.', '');
    }

    /**
     * Convertit les octets en kilooctets.
     *
     * @param int $bytes
     * @return int
     */
    public static function convertBytesToKiloBytes(int $bytes): int
    {
        $kiloBytes = $bytes / 1024;
        return round($kiloBytes);
    }

    /**
     * Convertit les octets en mégaoctets.
     *
     * @param int $bytes
     * @return string
     */
    public static function convertBytesToMegaBytes(int $bytes): string
    {
        $megaBytes = $bytes / 1048576;
        return number_format($megaBytes, 2, '.', '');
    }

    /**
     * Convertit les mégaoctets en octets.
     *
     * @param int $megaBytes
     * @return string
     */
    public static function convertMegaToBytes(int $megaBytes): string
    {
        $bytes = $megaBytes * 1048576;
        return number_format($bytes, 2, '.', '');
    }

    /**
     * Clean Livewire Temp Files
     */
    public static function cleanLiveWireTempFolder()
    {
        $files = Storage::disk('livewire-tmp')->allFiles();

        foreach ($files as $file) {
            Storage::disk('livewire-tmp')->delete($file);
        }
    }

    /**
     * Détermine le nom de la route en fonction du rôle de l'utilisateur.
     *
     * @param Request $request
     * @return string
     */
    public static function getRouteNameByUserRole(Request $request): string
    {
        $role = $request->user()->role;
        $nameRoute = "";

        switch ($role) {
            case "admin":
                $nameRoute = "admin.dashboard";
                break;
        }

        return $nameRoute;
    }

    /**
     * createFolderIfNotExists
     *
     * @param string $folderPathToCreate
     * @param string $diskName
     * @return void
     */
    public static function createFolderIfNotExists(string $diskName, string $folderPathToCreate): void
    {
        if (!Storage::disk($diskName)->exists($folderPathToCreate)) {
            Storage::disk($diskName)->makeDirectory($folderPathToCreate);
        }
    }

    /**
     * IsFolderNameForbidden
     *
     * @param string $folderName
     * @return bool
     */
    public static function isInvalidFolderName($folderName)
    {
        $invalidCharactersPattern = '/[<>:"\/\\|?*\x00-\x1F]/';

        if (preg_match($invalidCharactersPattern, $folderName)) {
            return true;
        }

        $reservedNames = [
            'CON',
            'PRN',
            'AUX',
            'NUL',
            'COM1',
            'COM2',
            'COM3',
            'COM4',
            'COM5',
            'COM6',
            'COM7',
            'COM8',
            'COM9',
            'LPT1',
            'LPT2',
            'LPT3',
            'LPT4',
            'LPT5',
            'LPT6',
            'LPT7',
            'LPT8',
            'LPT9',
            ''
        ];

        if (in_array(strtoupper($folderName), $reservedNames)) {
            return true;
        }

        return false;
    }

    /**
     * IsFolderEmpty
     *
     * @param string $currentFolder
     * @return bool
     */
    public static function isFolderEmpty($currentFolder)
    {
        return empty(Storage::disk('users-documents')->files($currentFolder));
    }

    /**
     * Generate embed Youtube link from watch link
     *
     * @param string $link
     * @return string
     */
    public static function generateEmbedYoutubeLink($link)
    {
        // entry https://www.youtube.com/watch?v=LP53fp1xVx4
        // output https://www.youtube.com/embed/bWa6gVunVLE

        $search = "watch?v=";
        $replace = "embed/";

        return $link = str_replace($search, $replace, $link);
    }

    public static function reverseEmbedYoutubeLink($link)
    {
        // entry https://www.youtube.com/embed/bWa6gVunVLE
        // output https://www.youtube.com/watch?v=LP53fp1xVx4

        $search = "embed/";
        $replace = "watch?v=";

        return $link = str_replace($search, $replace, $link);
    }

    /**
     * Get the path to the image
     * Load the image from temp
     *
     * Create a new temp path
     * Convert the image to webp
     * Resize the image if needed
     * Destroy the memory
     * Return the webp path
     *
     * @param $file
     * @param int $width
     * @param int $height
     * @return string $webpTempPath
     */
    public static function convertImageToWebp($file, int $maxwidth, int $maxHeight)
    {
        $tempPath = $file->getRealPath();

        $imageContent = file_get_contents($tempPath);
        $image = imagecreatefromstring($imageContent);

        $webpTempPath = sys_get_temp_dir() . '/' . uniqid('converted_', true) . '.webp';

        $dimensions = getimagesize($tempPath);

        $width = $dimensions[0];
        $height = $dimensions[1];

        if ($width > $maxwidth || $height > $maxHeight) {
            $image = self::resizeImage($image, $width, $height, $maxwidth, $maxHeight);
        }

        imagewebp($image, $webpTempPath, 50);
        imagedestroy($image);

        return $webpTempPath;
    }

    public static function resizeImage($image, $width, $height, $maxwidth, $maxHeight)
    {
        $aspectRatio = $width / $height;

        if ($width > $maxwidth) {
            $newWidth = $maxwidth;
            $newHeight = round($maxwidth / $aspectRatio);
        } else {
            $newWidth = $width;
            $newHeight = $height;
        }

        if ($newHeight > $maxHeight) {
            $newHeight = $maxHeight;
            $newWidth = round($maxHeight * $aspectRatio);
        }

        $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        return $resizedImage;
    }
}
