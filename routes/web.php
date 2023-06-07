<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/edit-profile', [UserController::class, 'edit'])->name('profile');
Route::put('/update-profile/{user}', [UserController::class, 'update'])->name('profile.update');
Route::delete('/delete-profile/{user}', [UserController::class, 'destroy'])->name('profile.delete');
Route::get('/cart', [CartController::class, 'index']);
Route::get('/dashboard', [PosController::class, 'index']);

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

