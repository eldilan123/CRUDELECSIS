<?php

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

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/productos', 'App\Http\Controllers\ProductosController@index');
//Route::get('/productos/create', 'App\Http\Controllers\ProductosController@create');

Route::resource('productos', 'App\Http\Controllers\ProductosController');
Route::resource('auth', 'App\Http\Controllers\LoginController');
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
