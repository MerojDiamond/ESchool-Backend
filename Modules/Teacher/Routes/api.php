<?php

use Illuminate\Support\Facades\Route;
use Modules\Teacher\Http\Controllers\TeacherController;


Route::group(["middleware" => "auth:sanctum", "prefix" => "teacher"], function () {
    Route::get("all", [TeacherController::class, "all"])->middleware("can:read_teachers");
    Route::post("add", [TeacherController::class, "store"])->middleware("can:add_teacher");
    Route::put("update/{teacher}", [TeacherController::class, "update"])->middleware("can:edit_teacher");
    Route::delete("delete/{teacher}", [TeacherController::class, "destroy"])->middleware("can:delete_teacher");
});
