<?php

use App\Http\Controllers\BrakesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\EnginesController;
use App\Http\Controllers\ExhaustPipesController;
use App\Http\Controllers\WheelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuspensionController;
use App\Http\Controllers\SpoilerController;
use App\Http\Controllers\SideskirtsController;
use App\Http\Controllers\LightsController;
use App\Http\Controllers\ChatAssistanceController;

use App\Http\Controllers\Api\TokenController;
use App\Http\Controllers\ProveedorController;

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

Route::get('user', [TokenController::class, 'user'])->middleware('auth:sanctum');
Route::post('register', [TokenController::class, 'register'])->middleware('guest');
Route::post('login', [TokenController::class, 'login'])->middleware('guest');
Route::post('logout', [TokenController::class, 'logout'])->middleware('auth:sanctum');


Route::apiResource('cars', CarsController::class);
Route::apiResource('wheels', WheelsController::class);
Route::apiResource('suspensions', SuspensionController::class);
Route::apiResource('spoilers', SpoilerController::class);
Route::apiResource('sideskirts', SideskirtsController::class);
Route::apiResource('lights', LightsController::class);
Route::apiResource('chatassistances', ChatAssistanceController::class);
Route::apiResource('brakes', BrakesController::class);
Route::apiResource('engines', EnginesController::class);
Route::apiResource('exhaustpipes', ExhaustPipesController::class);
Route::apiResource('contacts', ContactInfoController::class);
Route::apiResource('proveedor', ProveedorController::class);
Route::put('cars/{car}/publish', [CarsController::class, 'publish']);
