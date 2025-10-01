<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

// Route default root → menampilkan welcome page
Route::get('/', function () {
    return view('welcome');
});

// Resource route untuk KaryawanController
// resource route otomatis bikin route untuk CRUD:
// index, create, store, show, edit, update, destroy
Route::resource('home', KaryawanController::class);
Route::resource('karyawan', KaryawanController::class);

// Contoh manual kalau mau tampil halaman home langsung
// Route::get('/home', function () {
//     return view('home');
// });