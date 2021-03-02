@extends('layouts.mainuser')

@section('title','HDC Events :: Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3" style="padding:30px;">
    <h1>Crie o Seu Evento</h1>
    <form action="/eventos" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="image">Imagem do evento: </label>
        <input type="file" id="image" name="image" class="form-control-file">

        <label for="title">Evento: </label>
        <input type="text" class="form-control" 
        id="title" name="title" placeholder="Nome do Evento" />

        <label for="city">Cidade: </label>
        <input type="text" class="form-control" 
        id="city" name="city" placeholder="Cidade do Evento" />

        <label for="private">Privado: </label>
        <select class="form-control" name="private" id="private">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>

        <label for="remote">Remoto: </label>
        <select class="form-control" name="remote" id="remote">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>

        <label for="description">Descrição: </label>
        <textarea name="description" id="description" class="form-control" placeholder="O evento é sobre ..."></textarea>
        
        <input type="submit" class="btn btn-primary"value="Criar Evento" />
    </form>
</div>

@endsection