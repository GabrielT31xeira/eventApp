@extends('layouts.main')

@section('title','HDC Events')

@section('contentWelcome')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
    
        <h1>Bem Vindo</h1>
        <p>Esse é um site de publicação de eventos se você procura por um evento clique no botão abaixo se você está publicando um evento faça o login ou faça o cadastro.</p>

        <a href="{{ url('/eventos') }}" class="btn btn-outline-success">Ver Eventos</a>
    </div>

    <div class="alert alert-dismissible alert-warning">
        <h4 class="alert-heading">Ateção!</h4>
        <p class="mb-0">Que bom que você chegou até aqui mas esse site não é oficial, ele é apenas um teste de um jovem de 19 anos apaixonado em programação :) para contato meu github: <a href="https://github.com/GabrielT31xeira" class="alert-link">Gabriel Teixeira</a> ou email: gt3ixeira@gmail.com para o repositorio desse projeto <a href="https://github.com/GabrielT31xeira/eventApp" class="alert-link">clique aqui</a>.</p>
    </div>
</body>

</html>
@endsection