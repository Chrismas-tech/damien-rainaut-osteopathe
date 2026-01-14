<?php

namespace App\Actions\Admin\Website\Seo;

use App\Helpers\CustomClasses;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreFaviconFile
{
    use AsAction;

    /**
     * We store the file in public_path/favicon
     * As we will use the same name file we can simply override it by calling the same name.
     */
    public function handle($file)
    {
        $path = 'public/favicon';

        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 775, true);
        }

        Storage::putFileAs(
            $path,
            $file,
            'favicon.png',
            [
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]
        );

        CustomClasses::cleanLiveWireTempFolder();

        return true;
    }
}
