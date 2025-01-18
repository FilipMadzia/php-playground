<?php

use App\Http\Controllers\Api\V1\DirectorController;
use App\Http\Controllers\Api\V1\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function()
{
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('directors', DirectorController::class);

    Route::post('movies/bulk', ['uses' => 'MovieController@bulkStore']);
});
