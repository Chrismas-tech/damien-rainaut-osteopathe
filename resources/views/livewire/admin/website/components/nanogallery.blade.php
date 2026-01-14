<div>
    @if ($images->count() > 0)
        <div class="my-5">
            <h2>Nos plus belles Photos</h2>
            <p>Revivez des moments inoubliables</p>
        </div>
        <div id="nanogallery2"
            data-nanogallery2='{
            "thumbnailHeight":"350",
            "thumbnailWidth":"350",
            "thumbnailBorderHorizontal": 0,
            "thumbnailBorderVertical": 0,
            "thumbnailGutterWidth": 10,
            "thumbnailGutterHeight": 10,
            "thumbnailHoverEffect2": "customlayer_backgroundColor_rgba(0,0,0,0.0)_rgba(0,0,0,0.5)_1000",
            "viewerZoom": false,
            "galleryMaxItems": {{ $nbImgsDisplayed }},
            "galleryL1Sorting":"titleAsc",
            "colorScheme":"dark",
            "galleryMosaic": [
                { "c": 1, "r": 1, "w": 2, "h": 2 },
                { "c": 3, "r": 1, "w": 1, "h": 1 },
                { "c": 3, "r": 2, "w": 1, "h": 1 },
                { "c": 4, "r": 1, "w": 1, "h": 2 },

                { "c": 1, "r": 3, "w": 1, "h": 1 },
                { "c": 2, "r": 3, "w": 1, "h": 1 },
                { "c": 3, "r": 3, "w": 2, "h": 1 },

                { "c": 1, "r": 4, "w": 2, "h": 2 },
                { "c": 3, "r": 4, "w": 1, "h": 1 },
                { "c": 4, "r": 4, "w": 1, "h": 2 },
                { "c": 3, "r": 5, "w": 1, "h": 1 },

                { "c": 2, "r": 6, "w": 1, "h": 1 },
                { "c": 1, "r": 6, "w": 1, "h": 1 },
                { "c": 3, "r": 6, "w": 2, "h": 1 },

                { "c": 1, "r": 7, "w": 4, "h": 1 }
            ]
                }'>
            @foreach ($images as $image)
                <a class="cursor-pointer" href="{{ asset('storage/' . $image->file_path . '/' . $image->file_name) }}"
                    data-ngThumb="{{ asset('storage/' . $image->file_path . '/' . $image->file_name) }}"></a>
            @endforeach
        </div>
    @else
        <div class="error-message">
            You need to upload some images to the Images Gallery in order to build a preview.
        </div>
    @endif
</div>
