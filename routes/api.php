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


Route::get('/clientes', 'App\Http\Controllers\ClienteController@getAll');
Route::get('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@showApi');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@storeApi');
Route::put('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@updateApi');
Route::delete('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@destroyApi');
