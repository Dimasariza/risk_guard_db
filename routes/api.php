<?php

use App\Http\Controllers\AssetSummaryController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\GeneralDataController;
use App\Http\Controllers\ItemController;
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
    Route::apiResource('component', ComponentController::class);
    Route::apiResource('equipment', EquipmentController::class);
    Route::apiResource('item', ItemController::class);
    Route::apiResource('asset_summary', AssetSummaryController::class);
});
