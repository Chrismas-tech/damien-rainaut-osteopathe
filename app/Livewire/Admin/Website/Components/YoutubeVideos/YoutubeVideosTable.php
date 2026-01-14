<?php

namespace App\Livewire\Admin\Website\Components\YoutubeVideos;

use App\Actions\Admin\Website\YoutubeVideos\DeleteYoutubeVideos;
use App\Actions\Admin\Website\YoutubeVideos\UpdateYoutubeVideo;
use App\Helpers\CustomClasses;
use App\Models\YoutubeVideo;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class YoutubeVideosTable extends Component
{
    use LivewireAlert;
    use WithPagination;

    // Search
    public string $search = '';
    public int $resultsPerPage = 5;
    public int $countSearch;

    // Selection
    public array $selection = [];
    public bool $selectionAllToggle = true;
    public bool $isSelectionValid = false;

    // Form
    public bool $isFormValid = true;

    // Youtube Video
    public string $regexLinkYoutube = '/^(https?:\/\/)?(www\.)?youtube\.com\/watch\?v=[A-Za-z0-9_-]{11}.*$/';
    public int $targetYoutubeVideoId;
    public string $youtubeVideoLink;

    // Listeners
    protected $listeners = [
        'confirmed',
        'refreshYoutubeVideosTable' => '$refresh'
    ];

    public function rules()
    {
        return [
            'youtubeVideoLink' => 'required|string|regex:' . $this->regexLinkYoutube,
        ];
    }

    public function messages()
    {
        return [
            'youtubeVideoLink.regex' => 'This is not a youtube link, you must respect the following format : https://www.youtube.com/watch?v=xxxxxxxxxxx. Load a video on youtube and copy paste the url here.',
        ];
    }

    public function updated()
    {
        if (strlen($this->youtubeVideoLink) > 43) {
            $this->youtubeVideoLink =  substr($this->youtubeVideoLink, 0, 43);
        }
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    public function selectOrDeselectEntries()
    {
        if ($this->selectionAllToggle) {
            $this->selection = YoutubeVideo::all()->pluck('id')->toArray();
        } else {
            $this->reset('selection');
            $this->isSelectionValid = false;
        }

        $this->selectionAllToggle = !$this->selectionAllToggle;
        $this->updatedSelection();
    }

    public function youtubeVideoUpdateModal($id)
    {
        // Enlève les erreurs
        $this->resetValidation();

        $youtubeVideo = YoutubeVideo::find($id);
        $this->targetYoutubeVideoId = $youtubeVideo->id;
        $this->youtubeVideoLink =
            CustomClasses::reverseEmbedYoutubeLink($youtubeVideo->youtube_link);
    }

    public function updateYoutubeVideo($id)
    {
        $youtubeVideo = YoutubeVideo::find($id);

        if (
            UpdateYoutubeVideo::run($this->validate(), $youtubeVideo)
        ) {
            $this->isFormValid = false;
            $this->dispatch('refreshYoutubeVideosTable');
            $this->alert('success', 'Youtube Video successfully updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedPage()
    {
        $this->updatedSelection();
    }

    public function updatedSelection()
    {
        if (count($this->selection) > 0) {
            $this->isSelectionValid = true;
        } else {
            $this->isSelectionValid = false;
        }
    }

    public function updatedresultsPerPage($numberResults)
    {
        $this->resultsPerPage = $numberResults;
        $this->resetPage();
        $this->updatedSelection();
    }

    public function deleteSelectionModal()
    {
        $this->alert('warning', 'Are you sure you want to delete all these selected entries ?', [
            'toast' => false,
            'onConfirmed' => 'confirmed',
            'timer' => false,
            'showCancelButton' => true,
            'showConfirmButton' => true,
            'cancelButtonText' => 'Cancel',
            'confirmButtonText' => 'Ok',
            'position' => 'center',
            'confirmButtonColor' => '#20c997',
            'cancelButtonColor' => '#d33',
        ]);
    }

    public function confirmed()
    {
        if (DeleteYoutubeVideos::run($this->selection)) {
            $this->alert('success', 'Youtube Videos successfully deleted!');
            $this->reset('selection', 'search');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function updateYoutubeVideoLink($id)
    {
        if (
            UpdateYoutubeVideo::run($this->seo)
        ) {
            $this->alert('success', 'Your OpenGraph File has been successfully uploaded !');
            $this->reset('file');
            $this->mount();
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function increaseOrder($id)
    {
        $youtubeVideo = YoutubeVideo::find($id);
        $youtubeVideo->update(['order' => $youtubeVideo->order + 1]);
        $this->alert('success', 'Order successfully updated!');
    }

    public function decreaseOrder($id)
    {
        $youtubeVideo = YoutubeVideo::find($id);

        if ($youtubeVideo->order - 1 === 0) {
            return;
        }

        $youtubeVideo->update(['order' => $youtubeVideo->order - 1]);
        $this->alert('success', 'Order successfully updated!');
    }

    public function render()
    {
        $youtubeVideos = YoutubeVideo::query();
        $youtubeVideos = $youtubeVideos
            ->orderBy('order', 'asc')
            ->paginate($this->resultsPerPage);

        $this->countSearch = $youtubeVideos->total();

        return view('livewire.admin.website.components.youtube-videos.youtube-videos-table', compact('youtubeVideos'));
    }
}
