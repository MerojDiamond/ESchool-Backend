<?php

use Illuminate\Support\Facades\Route;
use Modules\Subject\Http\Controllers\SubjectController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "subject"], function () {
    Route::get("all", [SubjectController::class, "all"])->middleware("can:read_subjects");
    Route::post("add", [SubjectController::class, "store"])->middleware("can:add_subject");
    Route::put("update/{subject}", [SubjectController::class, "update"])->middleware("can:edit_subject");
    Route::delete("delete/{subject}", [SubjectController::class, "destroy"])->middleware("can:delete_subject");
});
