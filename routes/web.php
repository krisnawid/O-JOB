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
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
        ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur']
    ];

    return view('lowongan/index', compact('pekerjaan'));
});

Route::get('/perusahaan', function () {
    return view('perusahaan/index');
});
Route::get('/perusahaan/create', function () {
    return view('perusahaan/create');
});

Route::get('/pelamar', function () {
    return view('pelamar/index');
});
Route::get('/pelamar/create', function () {
    return view('pelamar/create');
});