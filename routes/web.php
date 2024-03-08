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
Route::get('/AirTerjun', function () {
    return view('Wisata/AirTerjun/index');
});
Route::get('/Bukit', function () {
    return view('Wisata/Bukit/index');
});
Route::get('/Danau', function () {
    return view('Wisata/Danau/index');
});
Route::get('/Pantai', function () {
    return view('Wisata/Pantai/index');
});
Route::get('/Sejarah', function () {
    return view('Wisata/Sejarah/index');
});
