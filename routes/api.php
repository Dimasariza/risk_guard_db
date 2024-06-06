<?php

use App\Http\Controllers\GeneralDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 'middleware' => 'auth:api'
Route::group(['prefix' => 'v1'], function () {
    Route::get('/test', function () {
        return response()->json([
            "message" => "test api success",
            "data" => "Ready to toest api"
        ]);
    });

    Route::apiResource('general_data', GeneralDataController::class);
});
