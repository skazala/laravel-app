<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index'])->name('index_jobs');
Route::get('/jobs/create', [JobController::class, 'create'])->name('create_job')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->name('store_job')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('show_job');

Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('show_tag');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register_user');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('store_user');
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('store_session');
});

Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');
