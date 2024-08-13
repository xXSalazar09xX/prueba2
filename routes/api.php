<?php

use App\Http\Controllers\CondenaController;
use App\Http\Controllers\LadronesController;
use App\Http\Controllers\PoliciasController;
use App\Models\condena;
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
Route::post('/policias',[PoliciasController::class,'store']);
Route::post('/ladrones',[LadronesController::class,'store']);
Route::post('/condena',[CondenaController::class,'store'] );
Route::get('/ladrones/{id}',[LadronesController::class,'condena'] );
Route::get('/ladrones',[LadronesController::class,'index'] );
Route::get('/api',[PoliciasController::class,'index'] );


