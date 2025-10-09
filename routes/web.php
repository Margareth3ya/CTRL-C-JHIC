<?php

use Illuminate\Support\Facades\Route;

// ======== IMPORT MODEL ========
use App\Models\Visitor;

// ======== IMPORT CONTROLLERS ========
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProfileController;

// Public routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected admin routes
Route::middleware(['admin'])->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    
    // Assets
    Route::get('/assets', [AssetController::class, 'index'])->name('admin.assets.index');
    Route::get('/assets/create', [AssetController::class, 'create'])->name('admin.assets.create');
    Route::post('/assets', [AssetController::class, 'store'])->name('admin.assets.store');
    Route::get('/assets/{id}/edit', [AssetController::class, 'edit'])->name('admin.assets.edit');
    Route::put('/assets/{id}', [AssetController::class, 'update'])->name('admin.assets.update');
    Route::delete('/assets/{id}', [AssetController::class, 'destroy'])->name('admin.assets.destroy');
    
    // Contents
    Route::get('/contents', [ContentController::class, 'index'])->name('admin.contents.index');
    Route::get('/contents/create', [ContentController::class, 'create'])->name('admin.contents.create');
    Route::post('/contents', [ContentController::class, 'store'])->name('admin.contents.store');
    Route::get('/contents/{id}/edit', [ContentController::class, 'edit'])->name('admin.contents.edit');
    Route::put('/contents/{id}', [ContentController::class, 'update'])->name('admin.contents.update');
    Route::delete('/contents/{id}', [ContentController::class, 'destroy'])->name('admin.contents.destroy');

    // Apis Chart
    Route::get('/visitor-stats', [AdminController::class, 'getVisitorStats'])->name('admin.visitor.stats');

});

Route::get('/', function () {
    $ip = Request::ip();
    $today = now()->toDateString();

    // fungsi untuk cek apakah pengunjung sudah tercatat, jangan sentuh bahaya wkwk
    $exists = Visitor::where('ip_address', $ip)
        ->where('visit_date', $today)
        ->exists();

    if (!$exists) {
        Visitor::create([
            'ip_address' => $ip,
            'user_agent' => Request::header('User-Agent'),
            'visit_date' => $today,
        ]);
    }

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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


// API
Route::post('/api/gemini', [RecommendationController::class, 'getRecommendation']);
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/api/pengunjung', [VisitorController::class, 'Update'])->name('api.visitor');
});
Route::middleware(['auth'])->prefix('admin')->group(function () {
});



// DONE
Route::get('/program/jurusan', [DepartController::class, 'index']);
Route::get('/program/organisasi', function () {
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

