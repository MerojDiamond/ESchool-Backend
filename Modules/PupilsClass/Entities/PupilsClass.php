<?php

namespace Modules\PupilsClass\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PupilsClass extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

}
