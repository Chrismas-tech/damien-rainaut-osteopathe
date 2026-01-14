<?php

namespace App\Livewire\Admin\Website\Components\YoutubeVideos;

use App\Actions\Admin\Website\YoutubeVideos\StoreYoutubeVideo;
use App\Models\YoutubeVideo;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

/* use Illuminate\Validation\ValidationException; */

class CreateYoutubeVideoForm extends Component
{
    use LivewireAlert;

    // Youtube Video
    public string $youtubeLink;
    public string $regexLinkYoutube = '/^(https?:\/\/)?(www\.)?youtube\.com\/watch\?v=[A-Za-z0-9_-]{11}.*$/';

    // Form Validation
    public bool $isFormValid = false;

    public function rules()
    {
        return [
            'youtubeLink' => 'nullable|regex:' . $this->regexLinkYoutube,
        ];
    }

    public function messages()
    {
        return [
            'youtubeLink.regex' => 'This is not a youtube link, you must respect the following format : https://www.youtube.com/watch?v=xxxxxxxxxxx. Load a video on youtube and copy paste the url here.',
        ];
    }

    public function updatedYoutubeLink()
    {
        if (strlen($this->youtubeLink) > 43) {
            $this->youtubeLink =  substr($this->youtubeLink, 0, 43);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | updated LIVEWIRE FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function updated($propertyName)
    {
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    /*
    |--------------------------------------------------------------------------
    | SUBMIT
    |--------------------------------------------------------------------------
    */

    public function submit()
    {
        $maxOrder = YoutubeVideo::max('order') !== null ? YoutubeVideo::max('order') + 1 : 1;

        if (
            StoreYoutubeVideo::run($this->validate(), $maxOrder)
        ) {
            $this->isFormValid = false;
            $this->reset('youtubeLink');
            $this->dispatch('refreshYoutubeVideosTable');
            $this->alert('success', 'Youtube Video successfully added !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RENDER
    |--------------------------------------------------------------------------
    */
    public function render()
    {
        return view('livewire.admin.website.components.youtube-videos.create-youtube-video-form');
    }
}
