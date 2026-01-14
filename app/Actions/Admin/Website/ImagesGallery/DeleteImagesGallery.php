<?php

namespace App\Actions\Admin\Website\ImagesGallery;

use App\Models\ImagesGallery;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteImagesGallery
{
    use AsAction;

    public function handle(array $attributes)
    {
        foreach ($attributes as $id) {
            $file = ImagesGallery::findOrFail($id);
            $filePath = ($file->file_path  . '/' . $file->file_name);
            unlink(Storage::disk('public')->path($filePath));
        }
        return ImagesGallery::whereIn('id', $attributes)->delete();
    }
}
