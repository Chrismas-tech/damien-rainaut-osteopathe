<?php

namespace App\Actions\Admin\Website\YoutubeVideos;

use App\Helpers\CustomClasses;
use App\Models\YoutubeVideo;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateYoutubeVideo
{
    use AsAction;

    /**
     * Update Youtube Video Link
     */
    public function handle($attributes, YoutubeVideo $youtubeVideo)
    {
        return $youtubeVideo->update(
            [
                'youtube_link' => CustomClasses::generateEmbedYoutubeLink($attributes['youtubeVideoLink'])
            ]
        );
    }
}
