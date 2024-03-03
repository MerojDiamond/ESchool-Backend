<?php

use Illuminate\Support\Facades\Route;
use Modules\Mark\Http\Controllers\MarkController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "mark"], function () {
    Route::get("all", [MarkController::class, "all"])->middleware("can:read_marks");
    Route::post("add", [MarkController::class, "store"])->middleware("can:add_mark");
    Route::put("update/{mark}", [MarkController::class, "update"])->middleware("can:edit_mark");
    Route::delete("delete/{mark}", [MarkController::class, "destroy"])->middleware("can:delete_mark");
});
