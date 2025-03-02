<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResearchController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [AboutController::class, 'index'])->name('profil');

Route::get('/fasilitas', [AboutController::class, 'index'])->name('fasilitas');

Route::get('/research', [ResearchController::class, 'index'])->name('research');

Route::get('/service', [NewsController::class, 'index'])->name('service');

Route::get('/berita', [NewsController::class, 'index'])->name('berita');

