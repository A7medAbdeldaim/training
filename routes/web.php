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
Route::post('/search', [HomeController::class, 'search'])->name('search');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [HomeController::class, 'profile_post'])->name('profile.edit');

Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.all');
Route::get('/bikes/show/{id}', [BikeController::class, 'show'])->name('bikes.show');
Route::post('/bikes/rent/{id}', [BikeController::class, 'rent'])->name('bikes.rent');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::get('/bikes/store', [BikeController::class, 'store'])->name('bikes.store');

Route::get('/cars', [CarController::class, 'index'])->name('cars.all');
Route::get('/cars/show/{id}', [CarController::class, 'show'])->name('cars.show');
Route::post('/cars/rent/{id}', [CarController::class, 'rent'])->name('cars.rent');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::get('/cars/store', [CarController::class, 'store'])->name('cars.store');


Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'], function(){
    Route::get('/', [CategoryController::class, 'get'])->name('admin');
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::patch('users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('users/delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

    Route::get('categories', [CategoryController::class, 'get'])->name('categories.all');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('bikes', [BikeController::class, 'get'])->name('bikes.all');
    Route::get('bikes/create', [BikeController::class, 'create'])->name('bikes.create');
    Route::post('bikes/store', [BikeController::class, 'store'])->name('bikes.store');
    Route::get('bikes/edit/{id}', [BikeController::class, 'edit'])->name('bikes.edit');
    Route::patch('bikes/update/{id}', [BikeController::class, 'update'])->name('bikes.update');
    Route::get('bikes/delete/{id}', [UsersController::class, 'destroy'])->name('bikes.destroy');

    Route::get('cars', [CarController::class, 'get'])->name('cars.all');
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('cars/store', [CarController::class, 'store'])->name('cars.store');
    Route::get('cars/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');
    Route::patch('cars/update/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::get('cars/delete/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
});

