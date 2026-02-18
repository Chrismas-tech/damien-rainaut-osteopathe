<?php

namespace App\Livewire\Admin\Website\Seo;

use App\Actions\Admin\Website\Seo\UpdateSeo;
use App\Models\Seo;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MetadatasForm extends Component
{
    use LivewireAlert;

    public Seo $seo;

    public string $metaTitle;
    public string $metaDescription;

    public bool $toogleEnter;
    public bool $isFormValid = true;

    public function mount()
    {
        $this->seo = Seo::first();
        $this->metaTitle = $this->seo->meta_title;
        $this->metaDescription = $this->seo->meta_description;
    }

    public function rules()
    {
        return [
            'metaTitle' => 'required|string|min:3|max:60',
            'metaDescription' => 'string|min:3|max:160',
        ];
    }

    public function message()
    {
        return  [
            'metaTitle.max' => 'The meta description cannot exceed 60 characters.',
            'metaDescription.max' => 'The meta description cannot exceed 160 characters.',
        ];
    }

    public function updated($property)
    {
        try {
            $this->validate();
            // Si $this->validate() n'est pas correct le script s'arrête ici
            $this->isFormValid = true;
        } catch (Exception $e) {
            $this->isFormValid = false;
        }

        $this->validateOnly($property);
    }

    public function submit()
    {
        if (
            UpdateSeo::run($this->validate(),  $this->seo)
        ) {
            $this->alert('success', 'Seo updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function render()
    {
        return view('livewire.admin.website.seo.metadatas-form');
    }
}
