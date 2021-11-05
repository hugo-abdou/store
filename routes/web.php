<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', fn() => redirect()->route('dashboard'));

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users');

    // Products
    Route::get('/products', [ProductControler::class, 'index'])->name('products');

});

require __DIR__ . '/auth.php';
