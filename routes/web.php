<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PelamarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/lowongan');

Route::get('/login', function () {
    return view('login');
});

Route::resource('lowongan', LowonganController::class);


Route::resource('perusahaan', PerusahaanController::class)->only(['create', 'edit']);
Route::get('/perusahaan/{id}', [PerusahaanController::class, 'index']);
Route::get('/perusahaan/{id}/lamaran', [PerusahaanController::class, 'lamaran']);


Route::resource('pelamar', PelamarController::class)->only(['create', 'edit']);
Route::get('/pelamar/keahlian', [PelamarController::class, 'keahlian'])->name('skillautocomplete');
Route::get('/pelamar/{id}', [PelamarController::class, 'index']);
Route::get('/pelamar/{id}/lamaran', [PelamarController::class, 'lamaran']);
