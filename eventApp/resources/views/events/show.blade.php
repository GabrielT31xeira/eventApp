@extends('layouts.mainuser')

@section('title', $event->title)

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <style>
    #card-view {
        padding: 50px;
    }
    </style>

</head>

<body>

    <div class="col-md-10 offset-md-1" id="card-view">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon> {{ $event->city }}
                </p>
                <p class="event-date">
                    <ion-icon name="calendar-outline"></ion-icon> {{ date('d/m/Y',strtotime($event->date)) }}
                </p>
                <p class="event-participantes">
                    <ion-icon name="people-outline"></ion-icon> {{ @count($event->users) }}
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}
                </p>
                <h3>O Evento Conta Com:</h3>
                <ul id="items-list" style="list-style: none; padding-left: 0;">
                    @foreach ($event->items as $item)
                    <li>
                        <ion-icon name="play-outline"></ion-icon>{{ $item }}
                    </li>
                    @endforeach
                </ul>
                @if(!$eventsAsParticipantes)
                <form action="/eventos/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/eventos/join/{{ $event->id }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        Comfirmar Presença</a>
                </form>
                @else
                <form action="/eventos/leave/{{ $event->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <ion-icon name="trash-outline"></ion-icon>
                        Sair do Evento
                    </button>
                </form>
                @endif
            </div>
            <div class="col-md-12" id="description-container">
                <h4>Sobre o Evento:</h4>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>
</body>

</html>


@endsection