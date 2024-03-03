<?php

namespace Modules\Pupil\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeftInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        "pupil_id",
        "to",
        "date",
    ];

}
