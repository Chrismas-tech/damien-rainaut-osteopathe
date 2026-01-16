<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::prefix('/lang')->group(function () {
    Route::get('/fr', [LangController::class, 'lang_fr'])->name('lang.fr');
    Route::get('/en', [LangController::class, 'lang_en'])->name('lang.en');
    Route::get('/it', [LangController::class, 'lang_it'])->name('lang.it');
    Route::get('/de', [LangController::class, 'lang_de'])->name('lang.de');
});
