<?php

use App\Http\Controllers\WebsitePagesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['check-maintenance'])->group(function () {
    Route::get('/', [WebsitePagesController::class, 'home'])->name('website.home');
    Route::get('/terms-of-services', [WebsitePagesController::class, 'terms_of_services'])->name('website.terms-of-services');
    Route::get('/privay-policy', [WebsitePagesController::class, 'privacy_policy'])->name('website.privacy-policy');
    Route::get('/contact', [WebsitePagesController::class, 'contact'])->name('website.contact');
    Route::get('/credits', [WebsitePagesController::class, 'credits'])->name('website.credits');
    Route::get('/honoraires', [WebsitePagesController::class, 'honoraires'])->name('website.honoraires');

    /* SiteMap URL */
    Route::get('/sitemap', function () {
        $path = public_path('sitemap.xml');
        if (file_exists($path)) {
            return response()->file($path);
        }
    });
});
