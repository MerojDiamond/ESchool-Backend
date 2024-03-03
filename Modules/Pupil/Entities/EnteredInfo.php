<?php

namespace Modules\Pupil\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnteredInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        "pupil_id",
        "from",
        "date",
    ];

}
