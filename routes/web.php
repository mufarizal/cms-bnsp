<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Guest\ArticleController as GuestArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\KlienController as AdminKlienController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Guest\EventController as GuestEventController;
use App\Http\Controllers\Guest\GaleriController;
use App\Http\Controllers\Guest\KlienController;
use App\Http\Controllers\Guest\KontakController;
use App\Http\Controllers\Guest\ProdukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/artikel', [GuestArticleController::class, 'index'])->name('artikel.index');
Route::get('/artikel/kategori/{kategori}', [GuestArticleController::class, 'byKategori'])->name('artikel.kategori');
Route::get('/artikel/{article:slug}', [GuestArticleController::class, 'show'])->name('artikel.show');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/events', [GuestEventController::class, 'index'])->name('events.index');
Route::get('/kliens', [KlienController::class, 'index'])->name('kliens.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');


Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/articles', AdminArticleController::class)->names('admin.articles');
    Route::resource('/admin/produks', AdminProdukController::class)->names('admin.produks');
    Route::resource('/admin/galeris', AdminGaleriController::class)->names('admin.galeris');
    Route::resource('/admin/events', EventController::class)->names('admin.events');
    Route::resource('/admin/kliens', AdminKlienController::class)->names('admin.kliens');
    Route::get('kontaks', [AdminKontakController::class, 'index'])->name('admin.kontaks.index');
    Route::get('kontaks/{kontak}', [AdminKontakController::class, 'show'])->name('admin.kontaks.show');
    Route::delete('kontaks/{kontak}', [AdminKontakController::class, 'destroy'])->name('admin.kontaks.destroy');
});