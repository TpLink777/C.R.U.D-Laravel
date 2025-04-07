<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('pruebas.home')}}">si deseas volver a nuestra lista de categorias solo haz click</a>
    <br>
    <h1>hola aca se mostrara loque pongas en la url por ejemplo: </h1>

    <h2>Nombre: {{$visualizar->name}}</h2>
    <h2>Nombre: {{$visualizar->lastname}}</h2>
    <h2>Nombre: {{$visualizar->correo}}</h2>
    <br>
    <a href="{{route('pruebas.edit', $visualizar->id)}}">EDITAR</a>
    <br>
    <form action="{{route('pruebas.destroy', $visualizar->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">ELIMINAR</button>
    </form>
</body>
</html>