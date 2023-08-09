<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::get('/', function () {
    return view('home');
});

//Route::get('/home', function () {
 //   return view('home');
//});
Route::get('/home', [HomeC::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/guru', function () {
    return view('Guru');
});

Route::get('/siswa', function () {
    return view('Siswa');
});

Route::get('/kelas', function () {
    return view('Kelas');
});