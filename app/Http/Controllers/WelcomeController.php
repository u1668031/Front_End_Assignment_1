<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Workout;

class WelcomeController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
      $workouts = Workout::all();

      return view('welcome', [
        'title' => 'Posted Workouts',
        'workouts' => $workouts
      ]);
  }
}
