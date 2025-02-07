<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\IGAController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\MeetingController; // Ensure this line is present

Route::resource('members', MemberController::class);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('savings', SavingsController::class);
    Route::resource('igas', IGAController::class);
    Route::resource('training', TrainingController::class);
    Route::resource('meetings', MeetingController::class); // Ensure this line is present
});