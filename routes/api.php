<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PdfController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');

Route::group(['api'], function() {
    Route::post('register', [RegisterController::class, 'store']);
    Route::resource('categories', CategoryController::class);
    Route::get('pdf', [PdfController::class, 'index']);
});