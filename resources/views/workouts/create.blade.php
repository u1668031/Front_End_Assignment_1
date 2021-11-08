@extends('layouts.app')

@section('title', 'New Workout')

@section('content')
    <form action="{{ route('workouts.store') }}" method="POST">
        @csrf

        <div class=" my-10">
            <label for="workout">Workout:</label>
            <textarea name="workout" id="workout" row="5" class=" p-2 bg-gray-200 @error('workout') is-invalid @enderror"></textarea>

            @error('workout')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Create</button>
    </form>
@endsection
