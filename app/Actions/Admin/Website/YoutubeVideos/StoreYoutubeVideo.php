<?php

namespace App\Actions\Admin\Website\YoutubeVideos;

use App\Helpers\CustomClasses;
use App\Models\YoutubeVideo;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreYoutubeVideo
{
    use AsAction;

    /**
     * Store and Generate Youtube Link
     *
     */
    public function handle(array $attributes, int $order)
    {
        return YoutubeVideo::create([
            'youtube_link' => CustomClasses::generateEmbedYoutubeLink($attributes['youtubeLink']),
            'order' => $order
        ]);
    }
}
