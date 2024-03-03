<?php

use Illuminate\Support\Facades\Route;
use Modules\PupilsClass\Http\Controllers\PupilsClassController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "class"], function () {
    Route::get("all", [PupilsClassController::class, "all"])->middleware("can:read_classes");
    Route::post("add", [PupilsClassController::class, "store"])->middleware("can:add_class");
    Route::put("update/{class}", [PupilsClassController::class, "update"])->middleware("can:edit_class");
    Route::delete("delete/{class}", [PupilsClassController::class, "destroy"])->middleware("can:delete_class");
});
