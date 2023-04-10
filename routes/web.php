<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('event', EventController::class)->middleware('is_admin');
Route::resource('products', ProductController::class)->middleware('is_admin');
Route::resource('categories', CategoryController::class)->middleware('is_admin');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')
->middleware('is_admin');
Route::get('/users', [UserController::class, 'users'])->name('users')
->middleware('is_admin');
Route::get('/event/create', [CategoryController::class, 'cat'])->name('event.create')
->middleware('is_admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/events', [HomeController::class, 'event'])->name('events');
Route::get('/catering', [ProductController::class, 'cater'])->name('catering');
Route::get('/music', [ProductController::class, 'music'])->name('music');
Route::get('/code', [ProductController::class, 'code'])->name('code');
Route::get('/', [ProductController::class, 'main'])->name('welcome');
