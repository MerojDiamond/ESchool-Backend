<?php

namespace Modules\Parent\Http\Controllers;

use App\Models\User;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Parent\Entities\ParentModel;

class ParentController extends Controller
{
    public function all()
    {
        $parents = ParentModel::with("user")->get();
        return ResponseService::sendJsonResponse(true, 200, [], [
            "parents" => $parents
        ]);
    }


    public function store(Request $request)
    {
        $parent = ParentModel::create($request->only([
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
            "user_type" => ParentModel::class,
            "user_id" => $parent->id,
            "password" => 1234,
        ]));
        return ResponseService::success();
    }

    public function show(ParentModel $parent)
    {
        return ResponseService::sendJsonResponse(true, 200, [], ["parent" => $parent]);
    }


    public function update(Request $request, ParentModel $parent)
    {
        $parent->update($request->only([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        $parent->user->update($request->except([
            "speciality",
            "category",
            "knowledge",
            "start_of_work"
        ]));
        return ResponseService::success();
    }

    public function destroy(ParentModel $parent)
    {
        $parent->user->delete();
        $parent->delete();
        return ResponseService::success();
    }
}
