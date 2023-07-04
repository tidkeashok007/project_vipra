<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;



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


// IndexController
Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/sale', [IndexController::class,'sale'])->name('sale');
Route::get('/book', [IndexController::class,'book'])->name('book');




// signupController
Route::get('register', [signupController::class,'showSignUpForm'])->name('register');
// Route::post('/register', [signupController::class,'register']);




// loginController
Route::get('login', [loginController::class,'showLoginForm'])->name('login');
// Route::post('/login', [loginController::class,'login']);




// AdminController
Route::get('/admindashboard', [AdminController::class,'admindashboard'])->name('admindashboard');
Route::get('/admin_contact', [AdminController::class,'admin_contact'])->name('admin_contact');
Route::get('/admin_profile', [AdminController::class,'admin_profile'])->name('admin_profile');



