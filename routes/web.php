<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

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

//Profile Routes
Route::get('/edit-profile', [UserController::class, 'edit'])->name('profile');
Route::put('/update-profile/{user}', [UserController::class, 'update'])->name('profile.update');
Route::delete('/delete-profile/{user}', [UserController::class, 'destroy'])->name('profile.delete');

Route::get('/cart', [CartController::class, 'index']);

//Authentication Routes
///Login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

///register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

///logout
Route::post('/logout', [LoginController::class, 'logout']);

//POS Pages Routes
Route::get('/dashboard', [PosController::class, 'dashboard']);
// Route::get('/products', [PosController::class, 'index']);
Route::get('/add-product', [PosController::class, 'addproduct']);
Route::post('/add-product', [PosController::class, 'storeproduct']);
// Route::resource('/products', PosController::class);
// Route::get('/delete-product/{id}', [PosController::class, 'destroy'])->name('products.destroy');
// Route::get('/products/{id}', [PosController::class, 'edit']);
// Route::put('/update-product/{id}', [PosController::class, 'update']);
Route::resource('/products', PosController::class);
// Route::put('/update-product/{id}', [PosController::class, 'updateproduct'])->name('products.update');
Route::get('/faq', [PosController::class, 'faq']);
Route::get('/contact', [PosController::class, 'contact']);
Route::get('/store-profile', [PosController::class, 'storeprofile']);
Route::get('/transaction', [PosController::class, 'transaction']);
Route::get('/feature-locked', [PosController::class, 'locked']);

//POS Access Routes
// Route::get('/shop-register', [PosController::class, 'createRegister']);
// Route::post('/shop-register', [PosController::class, 'store']);
// Route::get('/shop-login', [PosController::class, 'createLogin']);
// Route::post('/shop-login', [PosController::class, 'authenticate']);
// Route::post('/shop-logout', [PosController::class, 'shoplogout']);

// Route::get('products/checkSlug', [ProductController::class, 'checkSlug']);
Route::get('/image', [ImageController::class, 'index'])->name('image.index');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');
