<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        (new RolePermissionSeeder())->run();
        (new UserSeeder())->run();
    }
}
