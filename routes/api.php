<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Regions
Route::get('/allRegions', [App\Http\Controllers\RegionsController::class, 'index']);
Route::post('/saveRegions', [App\Http\Controllers\RegionsController::class, 'store']);
Route::post('/searchRegions', [App\Http\Controllers\RegionsController::class, 'show']);

//Villes
Route::get('/allVilles', [App\Http\Controllers\VillesController::class, 'index']);
Route::post('/saveVilles', [App\Http\Controllers\VillesController::class, 'store']);
Route::post('/searchVilles', [App\Http\Controllers\VillesController::class, 'show']);

//Departements
Route::get('/allDepartements', [App\Http\Controllers\DepartementsController::class, 'index']);
Route::post('/saveDepartements', [App\Http\Controllers\DepartementsController::class, 'store']);
