<?php

namespace Modules\Pupil\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;

    protected $fillable = [
        "class_id",
        "deleted_at",
    ];

    public function user()
    {
        return $this->morphOne(User::class, "user");
    }

}
