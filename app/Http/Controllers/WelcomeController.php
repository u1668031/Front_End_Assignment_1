<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Workout;

class WelcomeController extends Controller
{
  public function index()
  {
  $workouts = Workout::all();

  return view('welcome', [
          'title' => 'Posted Workouts',
  		    'workouts' => $workouts
       ]);
  }
}
