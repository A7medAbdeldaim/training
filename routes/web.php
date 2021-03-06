<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\BookRequestsController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\TrainingsController;
use App\Http\Controllers\Admin\TraineesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PaymentRequestsController;
use App\Http\Controllers\Admin\RentRequestsController;
use App\Http\Controllers\Admin\TrainersController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [HomeController::class, 'profile_post'])->name('profile.edit');
Route::get('/chat', [HomeController::class, 'chat'])->name('chat');
Route::get('/chatTrainer', [HomeController::class, 'chatTrainer'])->name('chatTrainer');
Route::post('/send_message/{target_id}', [HomeController::class, 'send_message'])->name('send_message');

Route::get('/library/{id}', [LibraryController::class, 'show'])->name('categories.show');
Route::get('/trainings/{id}', [BookController::class, 'show'])->name('trainings.show');

Route::get('trainer_show/{trainer_id}', [HomeController::class, 'trainer_show'])->name('trainer_show');
Route::get('training_show/{training_id}', [HomeController::class, 'training_show'])->name('training_show');
Route::get('lesson_show/{lesson_id}', [HomeController::class, 'lesson_show'])->name('lesson_show');
Route::post('training_show/{training_id}/review', [HomeController::class, 'post_review'])->name('training_review');

Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('contact-us', [HomeController::class, 'contact'])->name('contact');

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login');

    Route::group(['middleware' => 'auth:admins'], function(){

        Route::get('/', [TrainersController::class, 'index'])->name('trainers');
        Route::get('/trainers', [TrainersController::class, 'index']);
        Route::get('trainers/create', [TrainersController::class, 'create'])->name('trainers.create');
        Route::post('trainers/store', [TrainersController::class, 'store'])->name('trainers.store');
        Route::get('trainers/edit/{id}', [TrainersController::class, 'edit'])->name('trainers.edit');
        Route::patch('trainers/update/{id}', [TrainersController::class, 'update'])->name('trainers.update');
        Route::get('trainers/delete/{id}', [TrainersController::class, 'destroy'])->name('trainers.destroy');

        Route::get('/trainees', [TraineesController::class, 'index'])->name('trainees');
        Route::get('trainees/create', [TraineesController::class, 'create'])->name('trainees.create');
        Route::post('trainees/store', [TraineesController::class, 'store'])->name('trainees.store');
        Route::get('trainees/edit/{id}', [TraineesController::class, 'edit'])->name('trainees.edit');
        Route::patch('trainees/update/{id}', [TraineesController::class, 'update'])->name('trainees.update');
        Route::get('trainees/delete/{id}', [TraineesController::class, 'destroy'])->name('trainees.destroy');

        Route::get('/admins', [AdminsController::class, 'index'])->name('admins');
        Route::get('admins/create', [AdminsController::class, 'create'])->name('admins.create');
        Route::post('admins/store', [AdminsController::class, 'store'])->name('admins.store');
        Route::get('admins/edit/{id}', [AdminsController::class, 'edit'])->name('admins.edit');
        Route::patch('admins/update/{id}', [AdminsController::class, 'update'])->name('admins.update');
        Route::get('admins/delete/{id}', [AdminsController::class, 'destroy'])->name('admins.destroy');

        Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
        Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('categories/store', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

        Route::get('/trainings', [TrainingsController::class, 'index'])->name('trainings');
        Route::get('trainings/create', [TrainingsController::class, 'create'])->name('trainings.create');
        Route::post('trainings/store', [TrainingsController::class, 'store'])->name('trainings.store');
        Route::get('trainings/edit/{id}', [TrainingsController::class, 'edit'])->name('trainings.edit');
        Route::patch('trainings/update/{id}', [TrainingsController::class, 'update'])->name('trainings.update');
        Route::get('trainings/delete/{id}', [TrainingsController::class, 'destroy'])->name('trainings.destroy');

        Route::get('training/{training_id}/lessons', [LessonsController::class, 'index'])->name('lessons');
        Route::get('training/{training_id}/lessons/create', [LessonsController::class, 'create'])->name('lessons.create');
        Route::post('training/{training_id}/lessons/store', [LessonsController::class, 'store'])->name('lessons.store');
        Route::get('training/{training_id}/lessons/edit/{id}', [LessonsController::class, 'edit'])->name('lessons.edit');
        Route::patch('training/{training_id}/lessons/update/{id}', [LessonsController::class, 'update'])->name('lessons.update');
        Route::get('training/{training_id}/lessons/delete/{id}', [LessonsController::class, 'destroy'])->name('lessons.destroy');

        Route::get('/book_requests', [BookRequestsController::class, 'index'])->name('book_requests');

        Route::get('/payment_requests', [PaymentRequestsController::class, 'index'])->name('payment_requests');

        Route::get('/rent_requests', [RentRequestsController::class, 'index'])->name('rent_requests');

        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    });
});

Route::group(['prefix'=>'trainers','as'=>'trainers.'], function(){
    Route::get('/login', [Trainer\Auth\LoginController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [Trainer\Auth\LoginController::class, 'login'])->name('login');
    Route::get('/register', [Trainer\Auth\RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
    Route::post('/register', [Trainer\Auth\RegisterController::class, 'register'])->name('register');

    Route::group(['middleware' => 'auth:trainers'], function(){

        Route::get('/', [Trainer\TrainingsController::class, 'index'])->name('trainings');
        Route::get('/trainings', [Trainer\TrainingsController::class, 'index']);
        Route::get('trainings/create', [Trainer\TrainingsController::class, 'create'])->name('trainings.create');
        Route::post('trainings/store', [Trainer\TrainingsController::class, 'store'])->name('trainings.store');
        Route::get('trainings/edit/{id}', [Trainer\TrainingsController::class, 'edit'])->name('trainings.edit');
        Route::patch('trainings/update/{id}', [Trainer\TrainingsController::class, 'update'])->name('trainings.update');
        Route::get('trainings/delete/{id}', [Trainer\TrainingsController::class, 'destroy'])->name('trainings.destroy');

        Route::get('training/{training_id}/lessons', [Trainer\LessonsController::class, 'index'])->name('lessons');
        Route::get('training/{training_id}/lessons/create', [Trainer\LessonsController::class, 'create'])->name('lessons.create');
        Route::post('training/{training_id}/lessons/store', [Trainer\LessonsController::class, 'store'])->name('lessons.store');
        Route::get('training/{training_id}/lessons/edit/{id}', [Trainer\LessonsController::class, 'edit'])->name('lessons.edit');
        Route::patch('training/{training_id}/lessons/update/{id}', [Trainer\LessonsController::class, 'update'])->name('lessons.update');
        Route::get('training/{training_id}/lessons/delete/{id}', [Trainer\LessonsController::class, 'destroy'])->name('lessons.destroy');

        Route::post('/logout', [Trainer\Auth\LoginController::class, 'logout'])->name('logout');

    });
});
