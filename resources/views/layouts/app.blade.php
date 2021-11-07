<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post a Workout - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="pageHeader">
		<div class="container mx-auto">
            <h1>Post your Workout!</h1>
		</div>
        </section>

        <section class="navigation">
		<div class="container mx-auto">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/workouts">Workouts</a></li>
                <li><a href="/workouts/create">Add a Workout</a></li>
            </ul>
		</div>
        </section>

        <section class="pageTitle">
		<div class="container mx-auto">
            <h2>@yield('title')</h2>
		</div>
        </section>

        <section class="content">
		<div class="container mx-auto">
            @yield('content')
		</div>
        </section>
    </body>
</html>
