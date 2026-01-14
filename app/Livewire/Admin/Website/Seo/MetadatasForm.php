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
    public string $metaKeywordsInput = '';
    public array $metaKeywords = [];

    public bool $toogleEnter;
    public bool $isFormValid = true;

    public function mount()
    {
        $this->seo = Seo::first();
        $this->metaTitle = $this->seo->meta_title;
        $this->metaDescription = $this->seo->meta_description;
        $this->metaKeywords = json_decode($this->seo->meta_keywords, true);
        $this->toogleEnter = $this->metaKeywordsInput ? true : false;
    }

    public function rules()
    {
        return [
            'metaTitle' => 'required|string|min:3|max:60',
            'metaDescription' => 'string|min:3|max:160',
            'metaKeywords' => 'array|max:160',
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

    public function updatedmetaKeywordsInput()
    {
        if (strlen($this->metaKeywordsInput) > 2) {
            $this->toogleEnter = true;
        } else {
            $this->toogleEnter = false;
        }
    }

    public function addmetaKeywordsInput()
    {

        if (strlen($this->metaKeywordsInput) > 2) {
            $keywords = array_map('trim', explode(',', $this->metaKeywordsInput));
            $newKeywords =
            array_filter($keywords, fn($keyword) => !empty($keyword) && !in_array($keyword, $this->metaKeywords));
            $this->metaKeywords = array_merge($this->metaKeywords, $newKeywords);
            sort($this->metaKeywords);
        }

        $this->toogleEnter = false;
        $this->updated('metaKeywords');
        $this->reset('metaKeywordsInput');
    }

    public function removemetaKeywordsInput($metaKeywordTarget)
    {
        foreach ($this->metaKeywords as $key => $metaKeyword) {
            if ($metaKeyword === $metaKeywordTarget) {
                unset($this->metaKeywords[$key]);
            }
        }
        $this->updated('metaKeywords');
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
