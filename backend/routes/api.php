<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ReviewsController;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('bootcamps', BootcampController::class);

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('courses', CoursesController::class);

//Clase Route: Encargada de rutas
//Metodo apiResource:: Crear rutas de cambio de estado para una entidad
Route::apiResource('reviews', ReviewsController::class);