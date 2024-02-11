<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/newlogin', function () {
//     return view('auth.newLogin');
// });
// Route::get('/admin', function () {
//     return '<h1>HALAMAN ADMIN</h1>';
// })->middleware(['auth', 'verified']);


// Route::get('/siswa', function () {
//     return '<h1>HALAMAN SISWA</h1>';
// })->middleware(['auth', 'verified']);


// Route::get('/guruBK', function () {
//     return '<h1>HALAMAN GURU BK</h1>';
// })->middleware(['auth', 'verified']);


Route::get('/', [GuestController::class, 'index']);
Route::get('/login', [GuestController::class, 'login'])->name('login');
Route::get('/register', [GuestController::class, 'register'])->name('register');
Route::get('/forgot-password', [GuestController::class, 'forgotPassword'])->name('forgotPassword');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    //Admin routes
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('UserAccess:administrator')->name('dashboard.admin');
    // Route::get('/dashboard', [AdminController::class, 'index'])->middleware('UserAccess:admnistrator')->name('dashboard.admin');
});


require __DIR__ . '/auth.php';
