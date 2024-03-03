<?php

namespace Modules\Mark\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        "pupil_id",
        "subject_id",
        "teacher_id",
        "mark",
        "description",
    ];

}
