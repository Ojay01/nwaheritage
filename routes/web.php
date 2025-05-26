<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('education', [FrontendController::class, 'education'])->name('education');
Route::get('join-masu', [FrontendController::class, 'joinUs'])->name('joinUs');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
