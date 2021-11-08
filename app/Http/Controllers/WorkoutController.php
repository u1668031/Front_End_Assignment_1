<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $workouts = Workout::orderBy('created_at', 'desc')
        ->paginate(20);

        return view('workouts/index', [
          'workouts' => $workouts
        ]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
     return view('workouts/create');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $request->validate([
             'workout' => 'required'
         ]);

         $workout = new Workout;
         $workout->user()->associate(Auth::user());
         $workout->workout = $request->workout;
         $workout->save();

         return redirect()->route('workouts.index')
             ->with('success','Workout posted successfully.');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
     public function show(Workout $workout)
     {
     return view('workouts.show', [
          		'workout' => $workout
            ]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
     public function edit(Workout $workout)
     {
     return view('workouts.edit', [
                 'workout' => $workout
     ]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Workout $workout)
     {
         $request->validate([
             'workout' => 'required'
         ]);

         $workout->workout = $request->workout;
         $workout->save();

         return redirect()->route('workouts.index')
             ->with('success', 'Workout updated successfully');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
     public function destroy(Workout $workout)
     {
             $workout->delete();

             return redirect()->route('workouts.index')
                 ->with('success', 'Workout deleted successfully');
     }
}
