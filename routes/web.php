<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.all');
Route::get('/bikes/show/{id}', [BikeController::class, 'show'])->name('bikes.show');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::get('/bikes/store', [BikeController::class, 'store'])->name('bikes.store');

Route::get('/cars', [CarController::class, 'index'])->name('cars.all');
Route::get('/cars/show/{id}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::get('/cars/store', [CarController::class, 'store'])->name('cars.store');


Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'], function(){
    Route::get('/', [CategoryController::class, 'get'])->name('admin');
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');

    Route::get('categories', [CategoryController::class, 'get'])->name('categories.all');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');

    Route::get('bikes', [BikeController::class, 'get'])->name('bikes.all');
    Route::get('bikes/create', [BikeController::class, 'create'])->name('bikes.create');
    Route::post('bikes/store', [BikeController::class, 'store'])->name('bikes.store');

    Route::get('cars', [CarController::class, 'get'])->name('cars.all');
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('cars/store', [CarController::class, 'store'])->name('cars.store');
});

