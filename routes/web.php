<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\InputAspirasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return redirect()->route('siswa.dashboard');
});

Route::group((['middleware' => 'guest']), function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Route::resource('user', AuthController::class);
});

Route::middleware(['auth', UserMiddleware::class])->prefix('siswa')->group(function () {
    Route::get('dashboard', [InputAspirasiController::class, 'dashboard'])->name('siswa.dashboard');
    Route::resource('input_aspirasi', InputAspirasiController::class);
});

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {

    Route::get('dashboard', [AspirasiController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('aspirasi', AspirasiController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('user', UserController::class);
    Route::post('register', [AuthController::class, 'register'])->name('user.register');
});
