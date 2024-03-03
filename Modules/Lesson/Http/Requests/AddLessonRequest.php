<?php

namespace Modules\Lesson\Http\Requests;

use App\Http\Requests\MainRequest;

class AddLessonRequest extends MainRequest
{
    public function rules()
    {
        return [
            "subject_id" => "required|numeric",
            "class_id" => "required|numeric",
            "day" => "required|string",
            "hour" => "required|numeric",
            "teacher_id" => "required|numeric",
        ];
    }
}
