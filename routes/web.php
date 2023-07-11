<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('dashboard.home');
});
//route profil
Route::get('/sejarah', function () {
    return view('dashboard.profil.sejarah');
});
Route::get('/struktur', function () {
    return view('dashboard.profil.struktur_organisasi');
});
Route::get('/identitas_logo', function () {
    return view('dashboard.profil.identitas_logo');
});
Route::get('/tugas_pokok', function () {
    return view('dashboard.profil.tugas_pokok');
});
//route layanan
Route::get('/layanan_kebakaran', function () {
    return view('dashboard.layanan.kebakaran');
});
Route::get('/layanan_laboraturium', function () {
    return view('dashboard.layanan.laboraturium');
});
Route::get('/layanan_penyelamatan', function () {
    return view('dashboard.layanan.penyelamatan');
});
//route pencegahan kebakaran
Route::get('/sosialisasi', function () {
    return view('dashboard.layanan.pencegahan.sosialisasi_edukasi');
});
Route::get('/pembinaan', function () {
    return view('dashboard.layanan.pencegahan.pembinaan');
});
Route::get('/pemberdayaan', function () {
    return view('dashboard.layanan.pencegahan.pemberdayaan');
});

// route publikasi
Route::get('/berita', function () {
    return view('dashboard.publikasi.berita');
});
Route::get('/kegiatan', function () {
    return view('dashboard.publikasi.kegiatan');
});
Route::get('/pers', function () {
    return view('dashboard.publikasi.pers');
});

Route::get('/pencegahan', function () {
    return view('dashboard.layanan.pencegahan.pencegahan');
});

Route::get('/kerjasama', [LoginController::class, 'login'])->name('login');
Route::post('/kerjasama', [LoginController::class, 'authenticate'])->name('loginProses');
Route::get('/admin-dashboard', [LoginController::class, 'adminHome'])->name('adminHome');
Route::get('/admin-berita', [AdminController::class, 'adminBerita'])->name('adminBerita');

Route::resource('brt', \App\Http\Controllers\Crud\BeritaController::class);
Route::resource('upload/img', \App\Http\Controllers\Crud\ImageUploadController::class);
