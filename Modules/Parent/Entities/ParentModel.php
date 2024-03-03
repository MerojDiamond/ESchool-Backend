<?php

namespace Modules\Parent\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParentModel extends Model
{
    use HasFactory;

    protected $fillable = [
        "pupil_id",
        "work",
    ];

    public function user()
    {
        return $this->morphOne(User::class, "user");
    }
}
