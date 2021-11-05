<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', fn()=>redirect()->route('dashboard'));

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', fn()=>Inertia::render('Dashboard'))->name('dashboard');

    // Users
    Route::get('/users', fn()=>Inertia::render('Users/UsersList'))->name('users');


});



require __DIR__.'/auth.php';
