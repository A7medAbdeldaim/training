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

Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [UsersController::class, 'store'])->name('admin.users.store');

Route::get('/admin/categories', [CategoryController::class, 'get'])->name('admin.categories.all');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');

