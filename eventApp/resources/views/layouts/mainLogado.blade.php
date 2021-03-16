<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <link href="/css/criarevento/index.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-light bg-primary">
        <img src="/img/mars_planet_space_icon_176329.png" class="mars" title="hello" style="width: 3%;" />
        <a href="/" class="navbar-brand">HDC Events</a>

        <div style="margin-left: 900px; ">
            <a href="/eventos/criar" class="btn btn-success">Criar Evento</a>
            <a href="/eventos" class="btn btn-success">Ver Eventos</a>
        </div>
    </div>
    <header>

    </header>

    @yield('content')

    <footer class="footer">
        <p>HDC Events &copy; 2021</p>
    </footer>
</body>

</html>