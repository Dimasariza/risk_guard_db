<?php

use App\Http\Controllers\AssetsByUserController;
use App\Http\Controllers\AssetSummaryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CorrosionLoopController;
use App\Http\Controllers\DamageMechanismController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FileController;
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
use App\Http\Controllers\RbiThinningScreeningQuestionController;
use App\Http\Controllers\UserController;
use App\Models\rbi_thinning_screening_question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 'middleware' => 'auth:api'
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::get('/linkstorage', function () {
    $target = '/home/itsriskg/risk_guard_db/storage/app/public';
    $shortcut = '/home/itsriskg/risk_guard_db/public/storage';
    symlink($target, $shortcut);
});

Route::group(['prefix' => 'v1'], function () {
    Route::post('/logout', function(){
        $logout = Auth::logout();
        dd($logout);
    });

    Route::get('test', function () {
        return response()->json([
            "message" => "test api success",
        ], 200);
    });

    Route::group(['prefix' => 'pof_rbi'], function () {
        Route::apiResource('thinning', PofRbiThinningController::class);
        Route::apiResource('ex_cor', PofRbiExCorController::class);
        Route::apiResource('alkaline', PofRbiAlkalineController::class);
        Route::apiResource('value', PofRbiValueController::class);
        Route::apiResource('screeningQuestion', RbiThinningScreeningQuestionController::class);
    });

    Route::group(['prefix' => 'pof_plan'], function () {
        Route::apiResource('thinning', PofPlanThinningController::class);
        Route::apiResource('ex_cor', PofPlanExCorController::class);
        Route::apiResource('alkaline', PofPlanAlkalineController::class);
        Route::apiResource('value', PofPlanValueController::class);
    });

    Route::apiResource('components', ComponentController::class);
    Route::apiResource('equipments', EquipmentController::class);
    Route::apiResource('items', ItemController::class);
    Route::apiResource('corrosion_loop', CorrosionLoopController::class);

    Route::post('componentByUser', [AssetsByUserController::class, 'component']);
    Route::post('equipmentByUser', [AssetsByUserController::class, 'equipment']);
    Route::post('itemByUser', [AssetsByUserController::class, 'item']);

    Route::apiResource('general_data', GeneralDataController::class);
    Route::apiResource('asset_summary', AssetSummaryController::class);
    Route::apiResource('damage_mechanism', DamageMechanismController::class);
    Route::apiResource('file', FileController::class);
    Route::apiResource('users', UserController::class);
});
