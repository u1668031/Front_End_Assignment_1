@extends('layouts.app')

@section('title', 'Posted Workouts')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @foreach ($workouts as $workout)
            <article>
                <h3><a href="{{ route('workouts.show', $workout->id) }}">{{ $workout->user->name }}</a></h3>

                <p>{{ $workout->workout }}</p>

                @if (Auth::user() && Auth::user()->id === $workout->user_id)
                    <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST">
                        <a class="btn btn-blue" href="{{ route('workouts.show', $workout->id) }}">Show</a>
                        <a class="btn btn-blue" href="{{ route('workouts.edit', $workout->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-red">Delete</button>
                    </form>
                @endif
            </article>
        @endforeach
    {{ $workouts->links() }}
@endsection
