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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/carrousel_add', [App\Http\Controllers\CarrousselController::class, 'create'])->name('carrousel_add');

Route::get('/carousel_edit', [App\Http\Controllers\CarrousselController::class, 'edit'])->name('carousel_edit');

Route::post('/carousel_store', [App\Http\Controllers\CarrousselController::class, 'store'])->name('carousel_store');