<?php

use Illuminate\Support\Facades\Route;

// Health check endpoint
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API Service is running',
        'version' => '1.0.0',
        'timestamp' => now()->toDateTimeString(),
        'environment' => config('app.env'),
        'php_version' => PHP_VERSION
    ]);
}); 