<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthManualController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"])->name("home");

Route::get('/about', [AboutController::class, "index"])->name("about");

Route::get('/product', [ProductController::class, "index"])->name("product");
Route::get('/product/{id_products}', [ProductController::class, 'show'])->name('product.detail');


Route::get('/contact', [ContactController::class, "index"])->name("contact");

Route::get('/dashbard', [DashboardController::class, "index"])->name("dashboard");
Route::resource('dashboard', DashboardController::class);

Route::get('/login', [AuthManualController::class, 'index'])->name('login');
Route::post('/login', [AuthManualController::class, 'loginProses'])->name('loginProses');
Route::post('/logout', [AuthManualController::class, 'logout'])->name('logout');