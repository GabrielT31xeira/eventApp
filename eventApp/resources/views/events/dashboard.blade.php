@extends('layouts.mainLogado')

@section('title','HDC Events :: Dashboard')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/dashboard/index.css" rel="stylesheet"> 

</head>

<body>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="/eventos/{{ $event->id}}">{{ $event->title }}</a></td>
                    <td>0</td>
                    <td><a href="/eventos/edit/{{ $event->id }}" class="btn btn-warning" style="margin-right: 2.5px;">Editar</a>
                        <form action="/eventos/{{ $event->id }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Você ainda não tem eventos <a href="/eventos/criar">criar evento</a></p>
        @endif
    </div>

</body>

</html>

@endsection