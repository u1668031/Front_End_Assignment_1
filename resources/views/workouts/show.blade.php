@extends('layouts.app')

@section('title', 'Showing ' . $workout->user->name)

@section('content')
    <p>{{ $workout->workout }}</p>
@endsection
