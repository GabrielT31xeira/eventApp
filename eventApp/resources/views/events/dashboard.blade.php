@extends('layouts.mainLogado')

@section('title','HDC Events :: Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
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
                <td><a href="#">Editar</a><a href="#">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem eventos <a href="/eventos/criar">criar evento</a></p>
    @endif
</div>


@endsection