<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;

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

// API POST
Route::post('/api/gemini', [RecommendationController::class, 'getRecommendation']);
Route::get('/api/gemini', [RecommendationController::class, 'getRecommendation']);