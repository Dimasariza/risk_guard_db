<?php

use App\Http\Controllers\AssetSummaryController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\GeneralDataController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PofPlanAlkalineController;
use App\Http\Controllers\PofPlanExCorController;
use App\Http\Controllers\PofPlanThinningController;
use App\Http\Controllers\PofPlanValueController;
use App\Http\Controllers\PofRbiAlkalineController;
use App\Http\Controllers\PofRbiExCorController;
use App\Http\Controllers\PofRbiThinningController;
use App\Http\Controllers\PofRbiValueController;
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
        ], 200);
    });

    Route::group(['prefix' => 'pof_rbi'], function () {
        Route::apiResource('thinning', PofRbiThinningController::class);
        Route::apiResource('ex_cor', PofRbiExCorController::class);
        Route::apiResource('alkaline', PofRbiAlkalineController::class);
        Route::apiResource('value', PofRbiValueController::class);
    });

    Route::group(['prefix' => 'pof_plan'], function () {
        Route::apiResource('thinning', PofPlanThinningController::class);
        Route::apiResource('ex_cor', PofPlanExCorController::class);
        Route::apiResource('alkaline', PofPlanAlkalineController::class);
        Route::apiResource('value', PofPlanValueController::class);
    });

    Route::apiResource('general_data', GeneralDataController::class);
    Route::apiResource('components', ComponentController::class);
    Route::apiResource('equipments', EquipmentController::class);
    Route::apiResource('items', ItemController::class);
    Route::apiResource('asset_summary', AssetSummaryController::class);
});
