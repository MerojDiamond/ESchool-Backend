<?php

use Illuminate\Support\Facades\Route;
use Modules\Pupil\Http\Controllers\PupilController;

Route::group(["middleware" => "auth:sanctum", "prefix" => "pupil"], function () {
    Route::get("all", [PupilController::class, "all"])->middleware("can:read_pupils");
    Route::post("add", [PupilController::class, "store"])->middleware("can:add_pupil");
    Route::put("update/{pupil}", [PupilController::class, "update"])->middleware("can:edit_pupil");
    Route::delete("delete/{pupil}", [PupilController::class, "destroy"])->middleware("can:delete_pupil");
});
