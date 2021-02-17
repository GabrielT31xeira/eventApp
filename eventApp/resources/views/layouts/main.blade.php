<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-primary">
            <p class="navbar-brand">HDC Events</p>
            <div class="logs-position">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-success" data-placement="right">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="right">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-success" data-placement="right">Cadastro</a>
                @endif
                @endauth

                @endif
            </div>
        </div>

        <img src="/img/fundo.png" alt="HDC Events" class="imgFundo" title="Ola">

    </header>
    @yield('content')
    <footer>
        <p class="footer">HDC Events &copy; 2021</p>
    </footer>
</body>

</html>