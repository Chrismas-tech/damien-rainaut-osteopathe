<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/{locale}', [LangController::class, 'lang_switch'])->name('lang.switch');
});
