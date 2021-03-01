<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/bikes', [App\Http\Controllers\BikeController::class, 'index'])->name('bikes.all');
Route::get('/bikes/show/{id}', [App\Http\Controllers\BikeController::class, 'show'])->name('bikes.show');
Route::get('/bikes/create', [App\Http\Controllers\BikeController::class, 'create'])->name('bikes.create');
Route::get('/bikes/store', [App\Http\Controllers\BikeController::class, 'store'])->name('bikes.store');

Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.all');
Route::get('/cars/show/{id}', [App\Http\Controllers\CarController::class, 'show'])->name('cars.show');
Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
Route::get('/cars/store', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');

