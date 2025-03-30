<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\UserResepController;
use App\Http\Controllers\VerificationController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');



Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/auth-google-redirect', [AuthController::class, 'google_redirect']);
Route::get('/auth-google-callback', [AuthController::class, 'google_callback']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'role:user', 'status']], function(){
    Route::get('/', function() {
        return view('welcome');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/verify', [VerificationController::class, 'index']);
    Route::post('/verify', [VerificationController::class, 'store']);
    Route::get('/verify/{unique_id}', [VerificationController::class, 'show']);
    Route::put('/verify/{unique_id}', [VerificationController::class, 'update']);
});
Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('/resep', ResepController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/saved', [ProfileController::class, 'savedResep'])->name('profile.profile');
    Route::post('/save/{resepId}', [SaveController::class, 'saveResep'])->name('profile.save');
    // Route::post('/resep/{resep}/review', [ReviewController::class, 'store'])->name('review.store');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
Route::get('/reviews/{resep_id}', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('/resep-semua', [UserResepController::class, 'all'])->name('resep.semua');
Route::get('/makanan/{resep}', [UserResepController::class, 'show'])->name('makanan.detail');

