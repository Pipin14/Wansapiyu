<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LayananController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/layanan', [FrontendController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail_layanan');

Route::get('/portofolio', [FrontendController::class, 'portofolio'])->name('portofolio');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');
