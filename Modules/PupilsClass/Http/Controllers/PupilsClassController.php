<?php

namespace Modules\PupilsClass\Http\Controllers;

use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PupilsClass\Entities\PupilsClass;

class PupilsClassController extends Controller
{
    public function all()
    {
        sleep(1);
        $classes = PupilsClass::all();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "classes" => $classes
        ]);
    }


    public function store(Request $request)
    {
        PupilsClass::create($request->all());
        return ResponseService::success();
    }

    public function show(PupilsClass $class)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["class" => $class]);
    }


    public function update(Request $request, PupilsClass $class)
    {
        $class->update($request->all());
        return ResponseService::success();
    }

    public function destroy(PupilsClass $class)
    {
        $class->delete();
        return ResponseService::success();
    }
}
