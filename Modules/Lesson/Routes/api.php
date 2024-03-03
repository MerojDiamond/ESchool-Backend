<?php

use Illuminate\Support\Facades\Route;
use Modules\Lesson\Http\Controllers\LessonController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "lesson"], function () {
    Route::get("all", [LessonController::class, "all"])->middleware("can:read_lessons");
    Route::post("add", [LessonController::class, "store"])->middleware("can:add_lesson");
    Route::put("update/{lesson}", [LessonController::class, "update"])->middleware("can:edit_lesson");
    Route::delete("delete/{lesson}", [LessonController::class, "destroy"])->middleware("can:delete_lesson");
});
