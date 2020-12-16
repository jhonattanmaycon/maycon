<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/feed/storyline', [FeedController::class,'index'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
