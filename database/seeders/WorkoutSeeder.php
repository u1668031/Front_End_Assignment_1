<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{

  /**
   * Run the workout seeds.
   *
   * @return void
   */

    public function run()
    {
        workout::factory()
            ->count(50)
            ->create();
    }
}
