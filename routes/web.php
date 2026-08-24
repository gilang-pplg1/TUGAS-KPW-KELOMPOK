<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route Login & Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk Halaman User Directory
Route::get('/users', function () {
    return view('users.index');
})->name('users.index');

// Route Resource untuk Genre, Cast, dan Film
Route::resource('genre', GenreController::class);
Route::resource('cast', CastController::class);
Route::resource('film', FilmController::class);

// Route Tambahan untuk Peran, Kritik, dan Profile
Route::resource('peran', PeranController::class);
Route::post('/kritik', [KritikController::class, 'store'])->name('kritik.store');
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::resource('role', RoleController::class);