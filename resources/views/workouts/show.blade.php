@extends('layouts.app')

@section('title', 'Showing ' . $workout->name)

@section('content')
    <p>{{ $workout->workout }}</p>
@endsection
