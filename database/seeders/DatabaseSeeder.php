<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\WorkoutSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            WorkoutSeeder::class
        ]);
    }
}
