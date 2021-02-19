<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <p class="navbar-brand">HDC Events</p>
    </div>

    @yield('content')
    
    <footer>
        <p class="footer">HDC Events &copy; 2021</p>
    </footer>

</body>

</html>