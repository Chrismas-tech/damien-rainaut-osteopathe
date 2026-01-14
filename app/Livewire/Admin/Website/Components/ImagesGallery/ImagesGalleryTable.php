<?php

namespace App\Livewire\Admin\Website\Components\ImagesGallery;

use App\Actions\Admin\Website\ImagesGallery\DeleteImagesGallery;
use App\Models\ImagesGallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ImagesGalleryTable extends Component
{
    use LivewireAlert;
    use WithPagination;

    // Search
    public string $search = '';
    public int $resultsPerPage = 50;
    public int $countSearch;

    // Selection
    public array $selection = [];
    public bool $selectionAllToggle = true;
    public bool $isSelectionValid = false;

    protected $listeners = [
        'confirmed',
        'refreshImagesGalleryTable' => '$refresh'
    ];

    public function refreshImagesGalleryTable() {}

    public function rerender()
    {
        return;
    }

    public function updatedPage()
    {
        $this->updatedSelection();
    }

    public function updatedSearch()
    {
        $this->resetPage();
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

    public function selectOrDeselectEntries()
    {
        if ($this->selectionAllToggle) {
            $this->selection = ImagesGallery::all()->pluck('id')->toArray();
        } else {
            $this->reset('selection');
            $this->isSelectionValid = false;
        }

        $this->selectionAllToggle = !$this->selectionAllToggle;
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
        if (DeleteImagesGallery::run($this->selection)) {
            $this->alert('success', 'Images successfully deleted!');
            $this->reset('selection', 'search');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function increaseOrder($id)
    {
        $currentImg = ImagesGallery::find($id);

        $currentFileName = explode('.', $currentImg->file_name)[0];
        $ext = explode('.', $currentImg->file_name)[1];

        $nextFileName = intval($currentFileName) + 1;

        $this->changeOrder($currentFileName, $nextFileName, $ext, $currentImg);
    }

    public function decreaseOrder($id)
    {
        $currentImg = ImagesGallery::find($id);

        $currentFileName = explode('.', $currentImg->file_name)[0];
        $ext = explode('.', $currentImg->file_name)[1];

        $nextFileName = intval($currentFileName) - 1;

        $this->changeOrder($currentFileName, $nextFileName, $ext, $currentImg);
    }

    public function changeOrder($currentFileName, $nextFileName, $ext, $currentImg)
    {

        if (Storage::disk('public')->exists($currentImg->file_path . '/' . $nextFileName . '.' .  $ext)) {
            $currentFileNameTemp = 'temp';

            Storage::disk('public')->move(
                $currentImg->file_path . '/' . $nextFileName . '.' . $ext,
                $currentImg->file_path . '/' . $currentFileNameTemp . '.' . $ext
            );
            Storage::disk('public')->move(
                $currentImg->file_path . '/' . $currentFileName . '.' . $ext,
                $currentImg->file_path . '/' . $nextFileName . '.' . $ext
            );
            Storage::disk('public')->move(
                $currentImg->file_path . '/' . $currentFileNameTemp . '.' . $ext,
                $currentImg->file_path . '/' . $currentFileName . '.' . $ext
            );

            $tempImg = $currentImg->replicate();

            $nextImg = ImagesGallery::where('file_name', strval($nextFileName) . '.' . $ext)->first();
            /* dd($tempImg, $currentImg, $nextImg); */

            $currentImg->update(
                [
                    'file_name' => strval($nextFileName) . '.' . $ext,
                ]
            );

            $nextImg->update(
                [
                    'file_name' => strval($tempImg->file_name),
                ]
            );
            $this->dispatch('refreshImagesGalleryTable');
            $this->alert('success', 'Order successfully updated!');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }


    public function render()
    {
        $images = ImagesGallery::query();

        $images = $images
            ->orderByRaw('CAST(SUBSTRING_INDEX(file_name, ".", 1) AS UNSIGNED) ASC')
            ->paginate($this->resultsPerPage);

        $this->countSearch = $images->total();

        return view('livewire.admin.website.components.images-gallery.images-gallery-table', compact('images'));
    }
}
