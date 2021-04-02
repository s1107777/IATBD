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

// Route::get('/home', [\App\Http\Controllers\HuisdierController::class, 'header']);
Route::get('/home', [\App\Http\Controllers\HuisdierController::class, 'index']);
Route::get('/home/{huisdier_id}', [\App\Http\Controllers\HuisdierController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
