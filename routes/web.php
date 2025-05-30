<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('education', [FrontendController::class, 'education'])->name('education');
Route::get('our-community', [FrontendController::class, 'community'])->name('community');
Route::get('join-masu', [FrontendController::class, 'joinUs'])->name('joinUs');
Route::get('our-events', [FrontendController::class, 'events'])->name('events');
Route::get('our-projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('our-history', [FrontendController::class, 'history'])->name('history');
Route::get('our-touristic-sites', [FrontendController::class, 'tourism'])->name('tourism');
Route::get('our-clans', [FrontendController::class, 'clans'])->name('clans');
Route::get('our-elites', [FrontendController::class, 'elites'])->name('elites');
Route::get('our-clans/{clan}', [FrontendController::class, 'showClans'])->name('clans.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
