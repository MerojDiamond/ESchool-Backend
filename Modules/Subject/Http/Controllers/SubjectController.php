<?php

namespace Modules\Subject\Http\Controllers;

use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Subject\Entities\Subject;

class SubjectController extends Controller
{
    public function all()
    {
        $subjects = Subject::all();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "subjects" => $subjects
        ]);
    }


    public function store(Request $request)
    {
        Subject::create($request->all());
        return ResponseService::success();
    }

    public function show(Subject $subject)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["subject" => $subject]);
    }


    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->all());
        return ResponseService::success();
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return ResponseService::success();
    }
}
