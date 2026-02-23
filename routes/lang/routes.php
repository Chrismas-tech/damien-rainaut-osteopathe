<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::get('/{locale}', [LangController::class, 'lang_switch'])->name('lang.switch');
