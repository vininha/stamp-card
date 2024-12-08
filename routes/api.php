<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\StoreController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    Route::post('logout/{id}', [AuthController::class, 'logout']);
});

Route::group([
    'middleware' => 'guest',
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::get('shops', [StoreController::class, 'index']);
    Route::post('client/', [ClientController::class, 'store']);
    Route::get('client/stamps', [ClientController::class, 'listStamps']);
});
