<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WheelsController;
use App\Http\Controllers\SuspensionController;
use App\Http\Controllers\SpoilerController;
use App\Http\Controllers\SideskirtsController;
use App\Http\Controllers\LightsController;
// use App\Http\Controllers\ChatAssistanceController;
// use App\Http\Controllers\ExhaustPipesController;

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
Route::apiResource('wheels', WheelsController::class);
Route::apiResource('suspensions', SuspensionController::class);
Route::apiResource('spoilers', SpoilerController::class);
Route::apiResource('sideskirts', SideskirtsController::class);
Route::apiResource('lights', LightsController::class);
// Route::apiResource('chatassistance', ChatAssistanceController::class);
// Route::apiResource('exhaustpipe', ExhaustPipesController::class);