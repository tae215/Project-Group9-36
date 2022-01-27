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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/Menu',[\App\Http\Controllers\Api\MenuApiController::class, 'index']);

Route::get('/types',[\App\Http\Controllers\Api\typeApiController::class, 'index']);

Route::get('/users',[\App\Http\Controllers\Api\userApiController::class, 'index']);
