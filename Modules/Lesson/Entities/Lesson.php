<?php

namespace Modules\Lesson\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        "subject_id",
        "class_id",
        "day",
        "hour",
        "teacher_id",
    ];
}
