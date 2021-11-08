@extends('layouts.app')

@section('title', 'Edit workout')

@section('content')
    <form action="{{ route('workouts.update', $workout->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="my-10">
            <label for="workout">workout:</label>
            <textarea name="workout" id="workout" row="5" class=" p-2 bg-gray-200 @error('comments') is-invalid @enderror"> {{ $workout->workout }}</textarea>

            @error('workout')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Update</button>
    </form>
@endsection
