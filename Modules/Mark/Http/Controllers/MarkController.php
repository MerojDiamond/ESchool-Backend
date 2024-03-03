<?php

namespace Modules\Mark\Http\Controllers;

use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Mark\Entities\Mark;

class MarkController extends Controller
{
    public function all()
    {
        $marks = Mark::all();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "marks" => $marks
        ]);
    }


    public function store(Request $request)
    {
        Mark::create($request->all());
        return ResponseService::success();
    }

    public function show(Mark $mark)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["mark" => $mark]);
    }

    public function update(Request $request, Mark $mark)
    {
        $mark->update($request->all());
        return ResponseService::success();
    }

    public function destroy(Mark $mark)
    {
        $mark->delete();
        return ResponseService::success();
    }
}
