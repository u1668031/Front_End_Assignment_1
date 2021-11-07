<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\WorkoutSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            WorkoutSeeder::class,
            UserSeeder::class,
        ]);
    }
}
