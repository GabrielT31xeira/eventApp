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
        <a href="{{ route('register') }}" class="btn btn-outline-success" data-placement="right">Cadastro</a>
        @endif
        @endauth

        @endif
    </div>
</div>

<div class="container">
    <h1>Bem Vindo</h1>
    <p>Esse é um site de publicação de eventos se você procura por um evento clique no botão abaixo se você está publicando um evento faça o login ou faça o cadastro.</p>

    <input type="button" value="Ver Eventos" class="btn btn-outline-success"/>
</div>

<div class="alert alert-dismissible alert-warning">
  <h4 class="alert-heading">Ateção!</h4>
  <p class="mb-0">Que bom que você chegou até aqui mas esse site não é oficial, ele é apenas um teste de um jovem de 19 anos apaixonado em programação :) para contato meu github: <a href="https://github.com/GabrielT31xeira" class="alert-link">Gabriel Teixeira</a> ou email: gt3ixeira@gmail.com para o repositorio desse projeto <a href="https://github.com/GabrielT31xeira/eventApp" class="alert-link">clique aqui</a></p>
</div>

</html>
@endsection