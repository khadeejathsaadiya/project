<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsermasterController;
use App\Http\Controllers\DocmasterController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home1', [App\Http\Controllers\HomeController1::class, 'index'])->name('home');
Route::resource('docmasters', DocmasterController::class);

Route::get('/home2', [App\Http\Controllers\HomeController2::class, 'index'])->name('home');
Route::resource('usermasters', UsermasterController::class);

Route::get('/home3', [App\Http\Controllers\HomeController3::class, 'index'])->name('home');
Route::resource('customers', CustomerController::class);
