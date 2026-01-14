<?php

namespace App\Actions\Admin\Website\YoutubeVideos;

use App\Models\YoutubeVideo;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteYoutubeVideos
{
    use AsAction;

    public function handle(array $attributes)
    {
        return YoutubeVideo::whereIn('id', $attributes)->delete();
    }
}
