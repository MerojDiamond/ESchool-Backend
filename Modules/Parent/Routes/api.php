<?php

use Illuminate\Support\Facades\Route;
use Modules\parent\Http\Controllers\ParentController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "parent"], function () {
    Route::get("all", [ParentController::class, "all"])->middleware("can:read_parents");
    Route::post("add", [ParentController::class, "store"])->middleware("can:add_parent");
    Route::put("update/{parent}", [ParentController::class, "update"])->middleware("can:edit_parent");
    Route::delete("delete/{parent}", [ParentController::class, "destroy"])->middleware("can:delete_parent");
});
