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
Route::middleware(['auth', 'blocked'])->group(function() {
    Route::get('/home', [\App\Http\Controllers\HuisdierController::class, 'index']);
    Route::get('/home/create', [\App\Http\Controllers\HuisdierController::class, 'create']);
    Route::post('/home', [\App\Http\Controllers\HuisdierController::class, 'store']);
    Route::get('/home/{huisdier_id}', [\App\Http\Controllers\HuisdierController::class, 'show']);
    Route::get('/profiel', [\App\Http\Controllers\HuisController::class, 'index']);
    Route::get('/fotos/upload', [\App\Http\Controllers\HuisController::class, 'create']);
    Route::get('/fotos/{huis_id}', [\App\Http\Controllers\HuisController::class, 'show']);
    Route::post('/upload', [\App\Http\Controllers\HuisController::class, 'store']);

});

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/aanvraag', [\App\Http\Controllers\AanvraagController::class, 'index']);
    Route::get('/aanvraag/{aanvraag_id}', [\App\Http\Controllers\AanvraagController::class, 'show']);
    Route::post('/admin/{id}', [\App\Http\Controllers\AanvraagController::class, 'update']);
    Route::get('/aanvraag/{aanvraag_id}/delete', [\App\Http\Controllers\AanvraagController::class, 'destroy']);
    Route::get('/review', [\App\Http\Controllers\ReviewController::class, 'index']);
    Route::get('/review/create', [\App\Http\Controllers\ReviewController::class, 'create']);
    Route::post('/review', [\App\Http\Controllers\ReviewController::class, 'store']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
