<?php

namespace App\Actions\Admin\Website\Seo;

use App\Models\Seo;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateOpenGraphDatabase
{
    use AsAction;

    /**
     * We store the file in public_path/openGraph
     * As we will use the same name file we can simply override it by calling the same name.
     */
    public function handle(Seo $seo)
    {
        return $seo->update(
            [
                'open_graph_file_path' => 'storage/openGraph/openGraph.jpg',
            ]
        );
    }
}
