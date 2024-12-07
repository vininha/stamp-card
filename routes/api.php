<?php

use App\Http\Controllers\Api\AuthController;
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
});
