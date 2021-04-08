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

// Route::get('/', [App\Http\Controllers\CentralController::class, 'index']);

Route::middleware(['auth'])->group(function(){
    Route::post('/pets/create', [App\Http\Controllers\AnimalController::class, 'store']);
    Route::get('/pets/create', [App\Http\Controllers\AnimalController::class, 'create']);
    Route::get('/', [App\Http\Controllers\AnimalController::class, 'show']);
    Route::get('/request', [App\Http\Controllers\RequestController::class, 'create']);
    Route::post('/request', [App\Http\Controllers\RequestController::class, 'store']);
});

require __DIR__.'/auth.php';
