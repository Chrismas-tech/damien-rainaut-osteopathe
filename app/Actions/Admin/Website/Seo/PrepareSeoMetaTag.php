<?php

namespace App\Actions\Admin\Website\Seo;

use App\Models\Seo;
use App\Models\Website;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Lorisleiva\Actions\Concerns\AsAction;

class PrepareSeoMetaTag
{
    use AsAction;

    public function handle()
    {
        // We build all Seo Except Title because the page name is dynamic in the blade file
        $seo = Seo::findorFail(1);
        $meta_title = Website::first()->application_name;

        SEOMeta::setDescription($seo->meta_description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::addKeyword(json_decode($seo->meta_keywords, true));

        OpenGraph::setTitle($meta_title);
        OpenGraph::setDescription($seo->meta_description);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset($seo->open_graph_file_path));

        TwitterCard::setTitle($meta_title);
        TwitterCard::setDescription($seo->meta_description);
        TwitterCard::setUrl(url()->full());
        TwitterCard::addImage(asset($seo->open_graph_file_path));
    }
}
