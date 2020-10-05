<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function ()
{
    return view('login');
});

Route::get('/lowongan/create', function ()
{
    $kategori = [
        'it' => 'IT', 
        'marketing' => 'Marketing'
    ];

    $keahlian = [
        'FE' => 'Frontend Engineer',
        'BE' => 'Backend Engineer',
        'QA' => 'QA Engineer',
    ];

    $data = [
        'kategori' => $kategori,
        'keahlian' => $keahlian
    ];

    return view('lowongan/create', compact('data'));
});

Route::get('/lowongan', function () {

    $pekerjaan = [
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'Backend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'QA Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'DevOps Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur']
    ];

    return view('lowongan/index', compact('pekerjaan'));
});

Route::get('/lowongan/{id}', function ($id) {
    return view('lowongan/show');
});

Route::get('/perusahaan/{id}', function ($id) {
    $pekerjaan = [
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'Backend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'QA Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'DevOps Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur']
    ];

    return view('perusahaan/index', compact('pekerjaan'));
});

Route::get('/perusahaan/{id}/lamaran', function ($id) {
    $pelamar = [
        ['nama' => 'John Doe'],
        ['nama' => 'Jane Doe'],
        ['nama' => 'Jan Da'],
    ];

    return view('perusahaan/lamaran/index', compact('pelamar'));
});

Route::get('/perusahaan/create', function () {
    return view('perusahaan/create');
});

Route::get('/pelamar/{id}', function ($id) {
    return view('pelamar/index');
});

Route::get('/pelamar/{id}/lamaran', function ($id) {
    $lamaran = [
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Diterima'],
        ['judul' => 'Backend Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Ditolak'],
        ['judul' => 'QA Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Pending'],
        ['judul' => 'DevOps Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Pending']
    ];    
    return view('pelamar/lamaran/index', compact('lamaran'));
});

Route::get('/pelamar/create', function () {
    return view('pelamar/create');
});