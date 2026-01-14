<?php

use App\Http\Controllers\UserPagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| USERS
|--------------------------------------------------------------------------
*/

Route::prefix('/user')->middleware(['auth', 'role:user', 'check-maintenance', 'verified'])->group(function () {
    Route::get('/dashboard', [UserPagesController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profile', [UserPagesController::class, 'profile'])->name('user.profile');
    Route::get('/user-documents', [UserPagesController::class, 'user_documents'])->name('user.user-documents');
});
