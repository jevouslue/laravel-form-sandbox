<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [ContactFormController::class, 'index'])->name('contact');
Route::post('contact', [ContactFormController::class, 'sendMail']);
Route::get('contact/thanks', [ContactFormController::class, 'thanks'])->name('contact.thanks');

// ビューファイルプレビュー用
//Route::view('contact/confirm', 'contact.confirm');
