<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('index');
});
Route::get('/informasi/berita', function () {
    return view('informasi.berita');
});
Route::get('/informasi/berita/berita', function () {
    return view('informasi.berita_lengkap1');
});
Route::get('/informasi/kegiatan', function () {
    return view('informasi.kegiatan');
});
Route::get('/informasi/ssb', function () {
    return view('informasi.SSB');
});
Route::get('/informasi/prestasi', function () {
    return view('informasi.prestasi');
});

Route::get('/profile', function () {
    return view('profile.index');
});


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


// API POST
Route::post('/api/gemini', [RecommendationController::class, 'getRecommendation']);
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');

// TAHAP DEVELOPMENT LOGIC
Route::get('/program/jurusan', [DepartController::class, 'index']);
Route::get('/program/organisasi', function() {
    return view('program.organisasi');
});



// KEPERLUAN TESTING & DEBUGGING
// Route::get('/api/gemini', [RecommendationController::class, 'getRecommendation']);
// Route::get('/t', function() {
//     try {
//         Mail::raw('Test email dari SMK PGRI 3', function($message) {
//             $message->to('radityapanca02@gmail.com')
//                     ->subject('Test Email');
//         });
//         return 'Email terkirim!';
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });