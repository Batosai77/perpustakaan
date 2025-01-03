<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\PerpusdaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('perpusda', PerpusdaController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('books', BookController::class);
    Route::get('books?category={category}', [BookController::class, 'getByCategory']);
});
