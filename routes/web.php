<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForAllController;

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

Route::get('/',  [ForAllController::class, 'index']);
Route::get('/check-code/', [ForAllController::class, 'check']);
Route::get('/admin/destroy/{id}', [ForAllController::class, 'destroy'])->middleware('admin');
Route::get('/admin/edit/{id}', [ForAllController::class, 'edit'])->middleware('admin');
Route::post('/admin/edit/{id}', [ForAllController::class, 'editpost'])->middleware('admin');
Route::resource('/admin', AdminController::class)->middleware('admin');

Auth::routes();
