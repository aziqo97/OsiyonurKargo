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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check-code/', [ForAllController::class, 'check']);
Route::resource('/admin', AdminController::class)->middleware('admin');

Auth::routes();
