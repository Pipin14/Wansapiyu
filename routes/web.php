<?php

use App\Models\Anggota;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/layanan', [FrontendController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail_layanan');

Route::post('/submit-ulasan', [FrontendController::class, 'submitUlasan'])->name('submit.ulasan');

Route::get('/portofolio', [FrontendController::class, 'portofolio'])->name('portofolio');
Route::get('/portofolio/{kategori}', [PortofolioController::class, 'showByKategori'])->name('portofolio.kategori');

Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about.us');
Route::get('/about-us', function () {
    $aboutUsSections = \App\Models\AboutUs::all();
    $anggotas = Anggota::all();
    return view('frontend.about-us', compact('aboutUsSections', 'anggotas'));
})->name('about.us');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');

Route::get('/admin/dashboard', function () {
    return Redirect::to('/admin');
});
