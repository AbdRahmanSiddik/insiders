<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Ahp\AhpController;
use App\Http\Controllers\Ahp\NilaiUKMController;
use App\Http\Controllers\Ahp\SPKController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ComController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriUkmController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function() {
    Route::get('/', [ComController::class, 'index']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // berita
    Route::get('/berita/all', [ComController::class, 'berita']);
    Route::get('/berita/{id}/all', [ComController::class, 'view_berita']);
    Route::get('/berita/{id}/detail', [ComController::class, 'detail_berita']);

    // ukm
    Route::get('/ukm/all', [ComController::class, 'ukm']);
    Route::get('/ukm/{id}/all', [ComController::class, 'view_ukm']);
    Route::get('/ukm/{id}/detail', [ComController::class, 'detail_ukm']);

    // galeri
    Route::get('/galeri', [ComController::class, 'galeri']);
    Route::get('/galeri/{token}/detail', [ComController::class, 'galeri_detail']);

    // ahp
    Route::get('/hitung', [AhpController::class, 'hitung']);
    Route::get('/student/preferences', [SPKController::class, 'preferences'])->name('student.preferences');
    Route::post('/student/recommendations', [SPKController::class, 'recommendations'])->name('student.recommendations');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[LoginController::class, 'logout']);
    Route::get('/home', [AdminController::class, 'index']);
    Route::get('/dashboard', [AdminController::class, 'index']);

    // UKM
    // kategori
    Route::get('/kategori/ukm', [KategoriUkmController::class, 'index']);
    Route::post('/kategori/ukm', [KategoriUkmController::class, 'store']);
    Route::post('/kategori/{id}/ukm_edit', [KategoriUkmController::class, 'update']);
    Route::get('/kategori/{id}/ukm_remove', [KategoriUkmController::class, 'destroy']);
    // !kategori

    // info
    Route::get('/ukm', [UkmController::class, 'index']);
    Route::get('/ukm/tambah', [UkmController::class, 'create']);
    Route::post('/ukm/tambah', [UkmController::class, 'store']);
    Route::get('/ukm/{token}/remove', [UkmController::class, 'destroy']);
    Route::get('/ukm/{token}/edit', [UkmController::class, 'edit']);
    Route::post('/ukm/{token}/edit', [UkmController::class, 'update']);
    Route::get('/ukm/{token}/view', [UkmController::class, 'show']);
    // !info
    // !UKM

    // upload gambar dari ckeditor
    Route::post('/upload', [HomeController::class, 'upload'])->name('ckeditor.upload');

    // Berita
    // kategori
    Route::get('/kategori/berita', [KategoriBeritaController::class, 'index']);
    Route::post('/kategori/berita', [KategoriBeritaController::class, 'store']);
    Route::post('/kategori/{id}/berita_edit', [KategoriBeritaController::class, 'update']);
    Route::get('/kategori/{id}/berita_remove', [KategoriBeritaController::class, 'destroy']);
    // !kategori
    // info
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/berita/tambah', [BeritaController::class, 'create']);
    Route::post('/berita/tambah', [BeritaController::class, 'store']);
    Route::get('/berita/{token}/remove', [BeritaController::class, 'destroy']);
    Route::get('/berita/{token}/edit', [BeritaController::class, 'edit']);
    Route::post('/berita/{token}/edit', [BeritaController::class, 'update']);
    Route::get('/berita/{token}/view', [BeritaController::class, 'show']);
    // !info
    // !Berita

    // galeri
    Route::get('/admin/galeri', [GaleriController::class, 'index']);
    Route::get('/galeri/tambah', [GaleriController::class, 'create']);
    Route::post('/galeri/tambah', [GaleriController::class, 'store']);
    Route::get('/galeri/{token}/remove', [GaleriController::class, 'destroy']);
    Route::get('/galeri/{token}/view', [GaleriController::class, 'show']);
    Route::get('/galeri/{token}/edit', [GaleriController::class, 'edit']);
    Route::post('/galeri/{token}/edit', [GaleriController::class, 'update']);

    // ahp admin
    Route::get('/spk', [NilaiUKMController::class, 'index']);
    Route::post('/spk', [NilaiUKMController::class, 'add_nilai']);

});
