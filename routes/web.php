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

// Route::middleware(['auth', 'admin'])->group(function() {

// });
Route::get('/home', [\App\Http\Controllers\HuisdierController::class, 'index']);
Route::get('/home/create', [\App\Http\Controllers\HuisdierController::class, 'create']);
Route::post('/home', [\App\Http\Controllers\HuisdierController::class, 'store']);
Route::get('/home/{huisdier_id}', [\App\Http\Controllers\HuisdierController::class, 'show']);

Route::get('/aanvraag', [\App\Http\Controllers\AanvraagController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/aanvraag/{aanvraag_id}', [\App\Http\Controllers\AanvraagController::class, 'show'])->middleware(['auth', 'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
