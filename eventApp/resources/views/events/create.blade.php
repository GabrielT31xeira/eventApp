@extends('layouts.mainuser')

@section('title','HDC Events :: Criar Eventos')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="./css/criarevento/index.css">


</head>

<body>
    <div id="event-create-container" class="col-md-6 offset-md-3" style="padding:30px;">
        <h1>Crie o Seu Evento</h1>
        <form action="/eventos" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="image">Imagem do evento: </label>
            <input type="file" id="image" name="image" class="form-control-file">

            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" />

            <label for="date">Data do Evento: </label>
            <input type="date" class="form-control" id="date" name="date" />

            <label for="city">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento" />

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

            <label for="items">Adcione items a infraestrutura: </label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="OpenBar"> Open Bar
            </div>

            <input type="submit" class="btn btn-primary" value="Criar Evento" />
        </form>
    </div>
</body>

</html>

@endsection