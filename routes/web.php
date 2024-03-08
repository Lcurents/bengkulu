<?php

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
    return view('index');
});

Route::get('/Home', function () {
    return view('Home/indexhome');
});

Route::get('/Makanan', function () {
    return view('Makanan/index');
});

Route::get('/Wisata', function () {
    return view('Wisata/index');
});

Route::get('/Adat', function () {
    return view('Adat/index');
});
