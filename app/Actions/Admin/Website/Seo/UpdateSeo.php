<?php

namespace App\Actions\Admin\Website\Seo;

use App\Models\Seo;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateSeo
{
    use AsAction;

    public function handle(array $attributes, Seo $seo)
    {
        return $seo->update(
            [
                'meta_title' => $attributes['metaTitle'],
                'meta_description' => $attributes['metaDescription'],
            ]
        );
    }
}
