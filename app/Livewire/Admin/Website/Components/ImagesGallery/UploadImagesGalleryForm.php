<?php

namespace App\Livewire\Admin\Website\Components\ImagesGallery;

use App\Actions\Admin\Website\ImagesGallery\StoreImagesGallery;
use App\Helpers\CustomClasses;
use App\Models\ImagesGallery;
use Exception;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UploadImagesGalleryForm extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    // Image File Informations
    public int $ratioToMegaBytes = 1048;
    public int $NbFiles = 20;
    public int $limitSizePerFile = 5; //mo
    public string $unit = ' mo';

    public bool $isFormValid = false;
    public $files = []; // We cannot type hint array, don't know why

    // Form Input File
    public string $acceptString;
    public string $extensionsString;

    // Form Input File Extension Browser List
    public array $extensions = [
        'jpg',
        'jpeg',
        'png',
        'webp',
    ];

    public int $maxWidthForResize = 1800;
    public int $maxHeightForResize = 1000;

    public string $webpExt = 'webp';

    public function mount()
    {
        $this->getAcceptString();
        $this->getExtensionString();
    }

    public function rules()
    {
        return [
            'files' => 'max:' . $this->NbFiles,
            'files.*' => 'file|required|max:' . $this->limitSizePerFile * $this->ratioToMegaBytes . '|mimes:' . $this->extensionsString,
        ];
    }

    public function messages()
    {
        return [
            'files.*.max' => 'One of your file does not respect the limitation size of ' . $this->limitSizePerFile . ' mo.',
            'files.max' => 'Number of files must not be exceed :max .',
        ];
    }

    private function getAcceptString()
    {
        $acceptList = array_map(function ($ext) {
            return '.' . trim($ext);
        }, $this->extensions);
        $this->acceptString = implode(',', $acceptList);
        /* $this->acceptString = '*'; */
    }


    private function getExtensionString()
    {
        $extensionStringList = '';

        foreach ($this->extensions as $key => $value) {
            if ($key === count($this->extensions) - 1) {
                $extensionStringList .= $value;
            } else {
                $extensionStringList .= $value . ',';
            }
        }

        $this->extensionsString = $extensionStringList;
    }

    public function updated()
    {
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    public function uploadFiles()
    {
        $currentFolder = 'images-gallery';
        CustomClasses::createFolderIfNotExists('public', $currentFolder);

        foreach ($this->files as $key => $file) {

            /* $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); */
            /* $fileExtension = $file->getClientOriginalExtension(); */
            /* $uniqueId = bin2hex(random_bytes(16));
            $fileName = $fileNameWithoutExt . '_' . $uniqueId . '.' . $fileExtension; */

            $currentNbImgDatabase = ImagesGallery::all()->count() + 1;
            $fileName = $currentNbImgDatabase . '.' . $this->webpExt;

            $imageWebp = CustomClasses::convertImageToWebp($file, $this->maxWidthForResize, $this->maxHeightForResize);

            Storage::disk('public')->putFileAs(
                $currentFolder,
                new UploadedFile($imageWebp, $fileName, 'image/webp', null, true),
                $fileName,
            );

            $fileSizeBytes = filesize(Storage::disk('public')->path($currentFolder . '/' . $fileName));
            $fileSizeKilobytes = CustomClasses::convertBytesToKiloBytes($fileSizeBytes);
            $fileSizeMegabytes = CustomClasses::convertBytesToMegaBytes($fileSizeBytes);
            $fileSizeGigabytes = CustomClasses::convertBytesToGigaBytes($fileSizeBytes);

            StoreImagesGallery::run(
                $fileName,
                $currentFolder,
                $this->webpExt,
                $fileSizeBytes,
                $fileSizeKilobytes,
                $fileSizeMegabytes,
                $fileSizeGigabytes,
            );
        }

        $this->dispatch('refreshImagesGalleryTable');
        $this->reset('files');
        $this->alert('success', 'Your files has/have been successfully uploaded !');
        CustomClasses::cleanLiveWireTempFolder();
    }

    public function resetUploadFiles()
    {
        $this->reset('files');
        $this->validate();
    }

    public function deleteFilesUpload($fileName)
    {
        foreach ($this->files as $key => $file) {
            if ($fileName === $file->getClientOriginalName()) {
                unset($this->files[$key]);
            }
        }
        $this->updated('files');
    }

    public function render()
    {
        return view('livewire.admin.website.components.images-gallery.upload-images-gallery-form');
    }
}
