<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/informasi/berita', function () {
    return view('informasi.berita');
});
Route::get('/informasi/berita/berita', function () {
    return view('informasi.berita_lengkap1');
});
Route::get('/profile', function () {
    return view('profile.index');
});
