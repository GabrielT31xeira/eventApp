@extends('layouts.mainuser')

@section('title','HDC Events :: Eventos')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="margin">
        <div id="search-container" class="col-md-12">
            <h1>Busque um Evento</h1>
            <form action="">
                <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar...">
            </form>
        </div>
    </div>
    <div class="center">
        <h2>Proximos Eventos</h2>
        <p>Veja os eventos dos proximos eventos</p>
    </div>

    <div class="card-box">
        @foreach($events as $event)
        <div class="card border-primary mb-3" id="card">
            <div class="card-body">
                <p class="card-date">
                    10/09/2021</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X participantes</p>
                <a href="#" class="btn btn-outline-success">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>

@endsection