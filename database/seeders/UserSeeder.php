<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Teacher\Entities\Teacher;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            "user_type" => Teacher::class,
            "user_id" => 1,
            "gender" => "male",
            "nationality" => "тоджик",
            "name" => "Super Admin",
            "date_of_birth" => "2007-12-28",
            "email" => "fozilovmerodz@gmail.com",
            "phone" => "880886643",
            "address" => "куч. Гагарин 94 / кв. 31",
            "photo_id" => 0,
            "password" => 1234,
        ]);
        $user->assignRole("Super-Admin");
    }
}
