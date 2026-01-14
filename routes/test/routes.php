<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test-mail-contact', [TestController::class, 'test_mail_contact'])->name('test-mail-contact');
Route::get('/test-mail-notify-user-new-documents', [TestController::class, 'test_notify_user_new_documents'])->name('test-notify-user-new-documents');
Route::get('/test-verify-email', [TestController::class, 'test_verify_email'])->name('test-verify-email');
Route::get('/test-send-credentials-new-user', [TestController::class, 'test_send_credentials_new_user'])->name('test-send-credentials-new-user');
Route::get('/test-rename-folder', [TestController::class, 'test_rename_folder'])->name('test-rename-folder');
