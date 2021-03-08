<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard/index.css">

    <title>@yield('title')</title>
</head>
<body>
<div class="navbar navbar-expand-lg navbar-light bg-primary">
        <img src="/img/mars_planet_space_icon_176329.png" class="mars" title="hello">
        <p class="navbar-brand">HDC Events</p>
    </div>
    <header>

    </header>

    @yield('content')

    <footer class="footer">
        <p>HDC Events &copy; 2021</p>
    </footer>
</body>
</html>