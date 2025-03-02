<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [AboutController::class, 'index'])->name('profil');

Route::get('/fasilitas', [AboutController::class, 'index'])->name('fasilitas');

Route::get('/research', [AboutController::class, 'index'])->name('research');

Route::get('/service', [AboutController::class, 'index'])->name('service');

Route::get('/berita', [AboutController::class, 'index'])->name('berita');

