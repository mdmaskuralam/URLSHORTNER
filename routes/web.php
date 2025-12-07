<?php

use App\Http\Controllers\UrlManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/short-url', [App\Http\Controllers\UrlManager::class, 'createShortUrl'])->name('short.url');
Route::get('/{code}', [App\Http\Controllers\UrlManager::class, 'redirectToOriginal'])->name('url.redirect');
Route::get('starts/{code}', [UrlManager::class,'stats'])->name('url.stats');
// Route for shortening URL
Route::post('/shorten', [UrlController::class, 'shorten'])->name('short.url');
