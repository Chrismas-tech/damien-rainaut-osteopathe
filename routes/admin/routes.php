<?php

use App\Http\Controllers\AdminPagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminPagesController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminPagesController::class, 'profile'])->name('admin.profile');

    Route::prefix('/website')->group(function () {

        Route::get('/seo', [AdminPagesController::class, 'seo'])->name('admin.seo');
        Route::get('/email-scheduler', [AdminPagesController::class, 'email_scheduler'])->name('admin.email-scheduler');
        Route::get('/settings', [AdminPagesController::class, 'website_settings'])->name('admin.website-settings');

        Route::prefix('/components')->group(function () {
            Route::get('/google-reviews', [AdminPagesController::class, 'google_reviews'])->name('admin.website.components.google-reviews');
            Route::get('/slider', [AdminPagesController::class, 'slider'])->name('admin.website.components.slider');
            Route::get('/jumbotrons', [AdminPagesController::class, 'jumbotrons'])->name('admin.website.components.jumbotrons');
            Route::get('/nanogallery', [AdminPagesController::class, 'nanogallery'])->name('admin.website.components.nanogallery');
            Route::get('/contact-form', [AdminPagesController::class, 'contact_form'])->name('admin.website.components.contact-form');
            Route::get('/youtube-videos', [AdminPagesController::class, 'youtube_videos'])->name('admin.website.components.youtube-videos');
            Route::get('/images-gallery', [AdminPagesController::class, 'images_gallery'])->name('admin.website.components.images-gallery');
        });
    });

    /* Upload File */
    Route::get('/upload-file', [AdminPagesController::class, 'test_upload_file'])->name('admin.test.upload-file');
});
