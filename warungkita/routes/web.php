<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Kab_kotaController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::get('/dashboard/update', [AdminController::class, 'update'])->name('admin.update');
Route::get('/users', [])->middleware(['auth', 'verified'])->name('users');

//UMKM
Route::get('/dashboard/umkm', [UmkmController::class, 'umkm'])->name('umkm.view');
Route::get('/dashboard/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
Route::post('/dashboard/umkm/submit', [UmkmController::class, 'submit'])->name('umkm.submit');
Route::get('/dashboard/umkm/edit/{id}', [UmkmController::class, 'edit'])->name('umkm.edit');
Route::post('/dashboard/umkm/update/{id}', [UmkmController::class, 'update'])->name('umkm.update');
Route::post('/dashboard/umkm/delete/{id}', [UmkmController::class, 'delete'])->name('umkm.delete');

//kab_kota
Route::get('/dashboard/kab_kota', [Kab_kotaController::class, 'kab_kota'])->name('kab_kota.view');
Route::get('/dashboard/kab_kota/create', [Kab_kotaController::class, 'create'])->name('kab_kota.create');
Route::post('/dashboard/kab_kota/submit', [Kab_kotaController::class, 'submit'])->name('kab_kota.submit');
Route::get('/dashboard/kab_kota/edit/{id}', [Kab_kotaController::class, 'edit'])->name('kab_kota.edit');
Route::post('/dashboard/kab_kota/update/{id}', [Kab_kotaController::class, 'update'])->name('kab_kota.update');
Route::post('/dashboard/kab_kota/delete/{id}', [Kab_kotaController::class, 'delete'])->name('kab_kota.delete');

// provinsi
Route::get('/dashboard/provinsi', [ProvinsiController::class, 'provinsi'])->name('provinsi.view');
Route::get('/dashboard/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/dashboard/provinsi/submit', [ProvinsiController::class, 'submit'])->name('provinsi.submit');
Route::get('/dashboard/provinsi/edit/{id}', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::post('/dashboard/provinsi/update/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::post('/dashboard/provinsi/delete/{id}', [ProvinsiController::class, 'delete'])->name('provinsi.delete');

//pembina
Route::get('/dashboard/pembina', [PembinaController::class, 'pembina'])->name('pembina.view');
Route::get('/dashboard/pembina/create', [PembinaController::class, 'create'])->name('pembina.create');
Route::post('/dashboard/pembina/submit', [PembinaController::class, 'submit'])->name('pembina.submit');
Route::get('/dashboard/pembina/edit/{id}', [PembinaController::class, 'edit'])->name('pembina.edit');
Route::post('/dashboard/pembina/update/{id}', [PembinaController::class, 'update'])->name('pembina.update');
Route::post('/dashboard/pembina/delete/{id}', [PembinaController::class, 'delete'])->name('pembina.delete');




require __DIR__.'/auth.php';
