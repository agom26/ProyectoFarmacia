<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboard\ProductosController;
use App\Http\Controllers\dashboard\ProveedoresController;
use App\Http\Controllers\dashboard\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

//Admin


route::resource('users',UserController::class);
route::resource('proveedor',ProveedoresController::class);
route::resource('productos',ProductosController::class);
route::resource('categories',CategoriesController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
