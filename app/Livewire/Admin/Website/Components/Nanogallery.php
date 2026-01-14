<?php

namespace App\Livewire\Admin\Website\Components;

use App\Models\ImagesGallery;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Nanogallery extends Component
{
    public string $nbImgsDisplayed = '10';
    public Collection $images;

    public function mount() {
        $this->images = ImagesGallery::all();
    }

    public function render()
    {
        return view('livewire.admin.website.components.nanogallery');
    }
}
