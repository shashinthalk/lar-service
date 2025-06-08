<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\API\V1\ProjectController;
use App\Http\Controllers\API\V1\UserProfileController;

Route::prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('user-profiles', UserProfileController::class);
});
