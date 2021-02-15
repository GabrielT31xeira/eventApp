@extends('layouts.main')

@section('title','HDC Events')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<div class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="logs-position">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/dashboard') }}" class="btn btn-outline-success" data-placement="right">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="right">Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-outline-success" data-placement="right">Register</a>
        @endif
        @endauth

        @endif
    </div>
</div>


<div class="container">
</div>

</html>
@endsection