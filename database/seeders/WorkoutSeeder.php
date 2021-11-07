<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        workout::factory()
            ->count(50)
            ->create();
    }
}
