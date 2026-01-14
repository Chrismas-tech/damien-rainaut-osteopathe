<?php

namespace App\Livewire\Admin\Website\Seo;

use App\Actions\Admin\Website\Seo\StoreLogo;
use App\Actions\Admin\Website\Seo\UpdateLogoDatabase;
use App\Models\Seo;
use Exception;
use Illuminate\Validation\Rules\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class LogoForm extends Component
{
    // ideal dimension 150x150
    use WithFileUploads;
    use LivewireAlert;

    // Seo
    public Seo $seo;

    // Upload File Information
    public $file;
    public $fileSizeMaxMo = '1mb';
    public string $fileName;
    public float $fileSize;
    public int $fileWidth;
    public int $fileHeight;
    /* public string $authorisedWidthDimensions = '426';
    public string $authorisedHeightDimensions = '327'; */

    // Best Image Size
    // 32x32 pixels and should not be more than 8 MB,

    // Form Validation
    public bool $isFormValid = false;

    public function rules()
    {
        return [
            'file' => [
                'required',
                File::types(['svg'])->max($this->fileSizeMaxMo)/* ,
                'dimensions:width=' . $this->authorisedWidthDimensions . ',height=' . $this->authorisedHeightDimensions, */
            ],
            /* new VerifyUploadFileIsNotExe(), */
        ];
    }

    public function messages()
    {
        return [
            /* 'file.required' => 'A file is required.', */
            'file.mimes' => 'Only PNG format is allowed. Please delete your current file.',
            'file.max' => 'The file size limit is ' . $this->fileSizeMaxMo . '. Please click on the delete button in the center of the image.',
            /* 'file.dimensions' => 'The file field has invalid image dimensions. Dimensions authorised : ' . $this->authorisedWidthDimensions . ' x ' . $this->authorisedHeightDimensions . 'px.', */
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
            $this->fileSize = floatval($this->file->getSize());

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
            StoreLogo::run($this->file) &&
            UpdateLogoDatabase::run($this->seo)
        ) {
            $this->isFormValid = false;
            $this->alert('success', 'Logo File uploaded !');
            $this->reset('file');
            $this->mount();
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function render()
    {
        return view('livewire.admin.website.seo.logo-form');
    }
}
