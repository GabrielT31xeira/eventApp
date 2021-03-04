@extends('layouts.mainuser')

@section('title','HDC Events :: Eventos')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="margin">
        <div id="search-container" class="col-md-12">
            <h1>Busque um Evento</h1>
            <form action="/eventos" method="GET">
                <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar...">
            </form>
        </div>
    </div>
    @if (!$search)
    <div class="center">
        <h2>Proximos Eventos</h2>
        <p>Veja os eventos dos proximos eventos</p>
    </div>
    @else
    <div class="center">
        <h2>Buscando Por: {{ $search }}</h2>
        <p>Veja os eventos da sua busca</p>
    </div>
    @endif
    <div class="card-box">
        @foreach($events as $event)
        <div class="card border-primary mb-3" id="card">
            <div class="card-body">
            <img src="img/events/{{ $event->image }}" alt="{{ $event->title }}" class="event-image">
                <p class="card-date">
                    {{ date('d/m/Y',strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X participantes</p>
                <a href="/eventos/{{ $event->id }}" class="btn btn-outline-success">Saber Mais</a>
            </div>
        </div>
        @endforeach

        @if(count($events) == 0 && $search)
        <p>Não foi possivel encontrar o evento. <a href="/eventos">ver todos</a></p>
        @elseif(count($events) == 0)
        <p>Não há eventos disponiveis</p>
        @endif
    </div>
</body>

</html>

@endsection