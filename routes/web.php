<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StaticControler;
use App\http\Controllers\ComputersController;

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

Route::get('/', [StaticControler::class, 'index'])->name('home.index');     // The (.) means (/)

Route::get('/about', [StaticControler::class, 'about'])->name('home.about');

Route::get('/portfolio', [StaticControler::class, 'portfolio'])->name('home.portfolio');

Route::get('/shop/{category?}/{item?}', [StaticControler::class, 'shop'])->name('home.shop');

Route::get('/store', [StaticControler::class, 'store'])->name('home.store');

Route::resource('computers', ComputersController::class);