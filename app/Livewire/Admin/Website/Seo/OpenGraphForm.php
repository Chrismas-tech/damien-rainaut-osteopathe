<?php

namespace App\Livewire\Admin\Website\Seo;

use App\Actions\Admin\Website\Seo\StoreOpenGraphFile;
use App\Actions\Admin\Website\Seo\UpdateOpenGraphDatabase;
use App\Models\Seo;
use Exception;
use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class OpenGraphForm extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    // Seo
    public Seo $seo;

    // Upload File Information
    public $file;
    public $fileSizeMaxMo = '1mb';
    public string $fileName;
    public int $fileSize;
    public int $fileWidth;
    public int $fileHeight;
    public string $authorisedDimensionsWidth = '1200';
    public string $authorisedDimensionsHeight = '630';

    // Best Image Size
    // 1,200 x 630 pixels and should not be more than 8 MB,

    // Form Validation
    public bool $isFormValid = false;

    public function rules()
    {
        return [
            'file' => [
                'required',
                File::types(['jpg'/* , 'png' */])->max($this->fileSizeMaxMo),
                'dimensions:width=' . $this->authorisedDimensionsWidth . ',height=' . $this->authorisedDimensionsHeight,

            ],
            /* new VerifyUploadFileIsNotExe(), */
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'A file is required.',
            'file.mimes' => 'Only JPG format is allowed. Please delete your current file.',
            'file.max' => 'The file size limit is ' . $this->fileSizeMaxMo . '. Please click on the delete button in the center of the image.',
            'file.dimensions' => 'The file field has invalid image dimensions. Dimensions authorised : ' . $this->authorisedDimensionsWidth . ' x ' . $this->authorisedDimensionsHeight . 'px.',
        ];
    }

    public function mount()
    {
        $this->seo = Seo::first();
    }

    public function updated($property)
    {
        try {
            $this->validate();
            $this->isFormValid = true;
        } catch (Exception $e) {
            $this->isFormValid = false;
        }

        if ($property === 'file') {
            // Get FileName & File Size
            $this->fileName = $this->file->getClientOriginalName();
            $this->fileSize = intval($this->file->getSize());

            // Get the File image dimensions
            list($width, $height) = getimagesize($this->file->getRealPath());
            $this->fileWidth = intval($width);
            $this->fileHeight = intval($height);
        }

        $this->validate();
    }

    public function removeFile()
    {
        $this->file = null;
        $this->fileName = '';
        $this->fileSize = 0;
        $this->fileWidth = 0;
        $this->fileHeight = 0;
        $this->validate();
    }

    public function submit()
    {
        if (
            StoreOpenGraphFile::run($this->file) &&
            UpdateOpenGraphDatabase::run($this->seo)
        ) {
            $this->isFormValid = false;
            $this->alert('success', 'Your OpenGraph File has been successfully uploaded !');
            $this->reset('file');
            $this->mount();
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function render()
    {
        return view('livewire.admin.website.seo.open-graph-form');
    }
}
