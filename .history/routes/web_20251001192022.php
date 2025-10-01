<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', KaryawanController::class);


// Route::get('/home', function () {
//     return view('home');
// });


?>