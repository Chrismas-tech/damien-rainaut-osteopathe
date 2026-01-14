<?php

namespace App\Actions\Admin\Website\Seo;

use App\Helpers\CustomClasses;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreOpenGraphFile
{
    use AsAction;

    /**
     * We store the file in public_path/openGraph
     * As we will use the same name file we can simply override it by calling the same name.
     */
    public function handle($file)
    {
        $path = 'public/openGraph';

        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 775, true);
        }

        Storage::putFileAs(
            $path,
            $file,
            'openGraph.jpg',
            [
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]
        );

        CustomClasses::cleanLiveWireTempFolder();

        return true;
    }
}
