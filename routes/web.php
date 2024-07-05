<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StaticControler;
use App\http\Controllers\ComputersController;

/*
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


// Route::get => Defines a single route for a specific HTTP method (GET) and URL, mapping it to a specific method in a controller.

// Route::resource => Defines multiple routes following RESTful conventions for a resource.

Route::get('/', [StaticControler::class, 'index'])->name('home.index');     // The (.) means (/)

Route::get('/about', [StaticControler::class, 'about'])->name('home.about');

Route::get('/portfolio', [StaticControler::class, 'portfolio'])->name('home.portfolio');

Route::get('/shop/{category?}/{item?}', [StaticControler::class, 'shop'])->name('home.shop');

Route::get('/store', [StaticControler::class, 'store'])->name('home.store');

Route::resource('computers', ComputersController::class);  //OR: (STATIC) Route::get('computers/{computer}', [ComputersController::class, 'XXX'])->name('computers.XXX');


