<?php

namespace Modules\Lesson\Http\Controllers;

use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Lesson\Entities\Lesson;

class LessonController extends Controller
{
    public function all()
    {
        $lessons = Lesson::all();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "lessons" => $lessons
        ]);
    }


    public function store(Request $request)
    {
        Lesson::create($request->all());
        return ResponseService::success();
    }

    public function show(Lesson $lesson)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["lesson" => $lesson]);
    }


    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return ResponseService::success();
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return ResponseService::success();
    }
}
