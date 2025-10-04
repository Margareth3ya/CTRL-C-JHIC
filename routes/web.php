<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\KontentController;
use App\Http\Controllers\AuthController;

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

// Halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/create', [AuthController::class, 'registerForm'])->name('register');
Route::post('/admin/create', [AuthController::class, 'register'])->name('register.post');

Route::middleware(['auth'])->group(function () {
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
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
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