<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerificationController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

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

Route::group(['middleware' => ['auth', 'role:user', 'status']], function(){
    Route::get('/user', function() {
        return 'halaman user';
    });
});
Route::group(['middleware' => ['auth', 'role:user']], function(){
    Route::get('/verify', [VerificationController::class, 'index']);
    Route::post('/verify', [VerificationController::class, 'store']);
    Route::get('/verify/{unique_id}', [VerificationController::class, 'show']);
    Route::put('/verify/{unique_id}', [VerificationController::class, 'update']);
});
Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
    // ->name('dashboard');
});
Route::get('/logout', [AuthController::class, 'logout']);
