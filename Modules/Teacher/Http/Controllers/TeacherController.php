<?php

namespace Modules\Teacher\Http\Controllers;

use App\Models\User;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Teacher\Entities\Teacher;

class TeacherController extends Controller
{
    public function all()
    {
        $teachers = Teacher::with("user")->get();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "teachers" => $teachers
        ]);
    }


    public function store(Request $request)
    {
        $teacher = Teacher::create($request->only([
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
            "user_type" => Teacher::class,
            "user_id" => $teacher->id,
            "password" => 1234,
        ]));
        return ResponseService::success();
    }

    public function show(Teacher $teacher)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["teacher" => $teacher]);
    }


    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->only([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        $teacher->user->update($request->except([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        return ResponseService::success();
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->user->delete();
        $teacher->delete();
        return ResponseService::success();
    }
}
