<?php

use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\ComputerController;
use App\Http\Controllers\api\v1\ObservationController;
use App\Http\Controllers\api\v1\UserController;
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

// Ruta para control de usuarios
Route::apiResource('/v1/users', UserController::class); // funciona sin la ruta completa POR QUE esta importado el controlador

// Ruta para control de computadoras
Route::apiResource('/v1/computers', ComputerController::class); 

// Ruta para control de categorias
Route::apiResource('/v1/categories', CategoryController::class); 

// Ruta para control de observaciones
Route::apiResource('/v1/observations', ObservationController::class); 