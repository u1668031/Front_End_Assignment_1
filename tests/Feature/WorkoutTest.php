<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Workout;
use App\Models\User;

class WorkoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_show_workouts()
     {
        $response = $this->get('/workouts');
        $response->assertOk();
        $response->assertViewIs('workouts.index');

        $expectedPage1NameData = Workout::orderBy('created_at', 'desc')
          ->take(20)
          ->pluck('workout');

        $response->assertSeeInOrder(array_merge([
            'Post a Workout'
          ], $expectedPage1NameData->toArray()));
      }

     public function test_create_workouts()
     {
        $newWorkout = 'Some test comments';
        $workout = Workout::factory()->create();

        $response = $this->actingAs($workout->user)
          ->followingRedirects()
          ->patch("/workouts/{$workout->id}", [
            'workout' => $newWorkout
          ]);

        $newWorkoutt = $workout->fresh();

        $response->assertOk();
        $this->assertEquals($newWorkout, $newWorkoutt->workout);
      }

      public function test_edit_workouts()
      {
        $newWorkout = 'Some test comments edited';
        $workout = Workout::factory()->create();

        $response = $this->get('/workouts');
        $response->assertViewIs('workouts.index');

        $response = $this->actingAs($workout->user)
          ->followingRedirects()
          ->patch("/workouts/{$workout->id}", [
            'workout' => $newWorkout
          ]);

        $newWorkoutt = $workout->fresh();

        $response->assertOk();
        $this->assertEquals($newWorkout, $newWorkoutt->workout);
      }

      public function test_delete_workouts()
      {
        $newWorkout = 'Some test comments';
        $workout = Workout::factory()->create();

        $response = $this->get('/workouts');
        $response->assertViewIs('workouts.index');

        $response = $this->actingAs($workout->user)
          ->followingRedirects()
          ->delete("/workouts/{$workout->id}");

        $response->assertOk();
      }
}
