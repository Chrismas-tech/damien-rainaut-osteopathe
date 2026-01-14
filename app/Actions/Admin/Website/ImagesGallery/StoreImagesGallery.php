<?php

namespace App\Actions\Admin\Website\ImagesGallery;
use App\Models\ImagesGallery;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreImagesGallery
{
    use AsAction;

    public function handle(
        string $fileName,
        string $filePath,
        string $fileType,
        int $fileSizeBytes,
        int $fileSizeKilobytes,
        string $fileSizeMegabytes,
        string $fileSizeGigabytes,
    ) {
        return ImagesGallery::create([
            'file_name' => $fileName,
            'file_path' => $filePath,
            'file_type' => $fileType,
            'file_size_kilobytes' => $fileSizeKilobytes,
            'file_size_bytes' => $fileSizeBytes,
            'file_size_megabytes' => $fileSizeMegabytes,
            'file_size_gigabytes' => $fileSizeGigabytes,
        ]);
    }
}
