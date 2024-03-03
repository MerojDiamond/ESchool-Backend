<?php

namespace Modules\Teacher\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        "speciality",
        "category",
        "knowledge",
        "start_of_work",
    ];

    public function user()
    {
        return $this->morphOne(User::class, "user");
    }

}
