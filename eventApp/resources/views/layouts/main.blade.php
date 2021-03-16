<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <link rel="stylesheet" href="./css/welcome/index.css">


    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-light bg-primary">
            <img src="/img/mars_planet_space_icon_176329.png" class="mars" title="hello">
            <a href="/" class="navbar-brand">HDC Events</a>
            <div class="logs-position">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-success" data-placement="right">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-success" data-toggle="tooltip" data-placement="right">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-success" data-placement="right">Cadastro</a>
                @endif
                @endauth

                @endif
            </div>
        </div>
        <!-- <img src="/img/fundo.png" alt="HDC Events" class="imgFundo" title="Ola"> -->
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('contentWelcome')
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div>
                <p>HDC Events &copy; 2021</p>
            </div>
        </div>
    </footer>
</body>

</html>