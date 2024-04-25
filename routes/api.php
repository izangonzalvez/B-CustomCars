<?php

use App\Http\Controllers\BrakesController;
use App\Http\Controllers\CarsController;
// use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\EnginesController;
use App\Http\Controllers\ExhaustPipesController;
use App\Http\Controllers\WheelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::apiResource('cars', CarsController::class);
Route::apiResource('wheels', WheelsController::class);
Route::apiResource('brakes', BrakesController::class);
Route::apiResource('engines', EnginesController::class);
Route::apiResource('exhaustpipes', ExhaustPipesController::class);
// Route::apiResource('contact', ContactInfoController::class);
