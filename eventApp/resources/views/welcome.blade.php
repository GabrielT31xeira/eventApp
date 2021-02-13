<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/scripts.js"></script>
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-light " 
    style="height:40px; margin-top: 10px; margin-right: 5px">
        <form class="d-flex">
            <div class="position-absolute top-0 end-0">
                @if (Route::has('login'))
                <div class="">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-success">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </form>
    </div>

    <div class="container">
        <h1>Hello Word</h1>

        @if(10>5)
        <h1>è verdade</h1>
        @endif
    </div>
</body>

</html>