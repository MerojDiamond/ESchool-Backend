<?php

namespace Modules\Pupil\Http\Controllers;

use App\Models\User;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Pupil\Entities\Pupil;

class PupilController extends Controller
{
    public function all()
    {
        $pupils = Pupil::with("user")->get();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "pupils" => $pupils
        ]);
    }


    public function store(Request $request)
    {
        $pupil = Pupil::create($request->only([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        User::create(array_merge(
            $request->except([
                "speciality",
                "category",
                "knowledge",
                "start_of_work"
            ]), [
            "user_type" => Pupil::class,
            "user_id" => $pupil->id,
            "password" => 1234,
        ]));
        return ResponseService::success();
    }

    public function show(Pupil $pupil)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["pupil" => $pupil]);
    }


    public function update(Request $request, Pupil $pupil)
    {
        $pupil->update($request->only([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        $pupil->user->update($request->except([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        return ResponseService::success();
    }

    public function destroy(Pupil $pupil)
    {
        $pupil->user->delete();
        $pupil->delete();
        return ResponseService::success();
    }
}
