<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('/test', function () {
        return response()->json([
            "message" => "test success",
            "data" => "Ready to toest"
        ]);
    });
});
