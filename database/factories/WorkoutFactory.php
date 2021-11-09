<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Workout;
use App\Models\User;


/**
  * This factory creates and inputs user and workout dummy data into the DB.
  */

class WorkoutFactory extends Factory
{
    protected $model = Workout::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(1)->create()->first(),
            'workout' => $this->faker->realText(500)
        ];
    }
}
