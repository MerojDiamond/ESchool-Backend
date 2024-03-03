<?php

use App\Http\Controllers\ExternalApiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::post("/login", [MainController::class, "login"]);
Route::group([], function () {
    Route::get('/weather', [ExternalApiController::class, "weather"]);
})->middleware('auth:sanctum');
