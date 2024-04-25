<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\WheelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WheelsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

// Route::apiResource('cars', CarsController::class);
=======
Route::apiResource('wheels', WheelsController::class);
>>>>>>> 752a52b0248bdfa12292bc3a7dccc2dce97c07e3
