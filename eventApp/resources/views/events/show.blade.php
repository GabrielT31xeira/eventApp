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
        padding: 77.1px;
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
                <p class="event-participantes">
                    <ion-icon name="people-outline"></ion-icon> X Participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon> Dono do Evento
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Comfirmar Presença</a>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento:</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>
</body>

</html>


@endsection