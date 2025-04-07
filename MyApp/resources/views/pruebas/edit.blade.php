<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulario para actualizar una categoria</h1>

    <form action="{{route('pruebas.update', $visualizar->id)}}" method="POST">
        
        @csrf
        @method('PUT')
        <label for="name">nombre</label>
        <input type="text" name="name" value="{{old('name', $visualizar->name)}}">
        <br>
        <label for="lastname">apellido</label>
        <input type="text" name="lastname" value="{{old('lastname', $visualizar->lastname)}}">
        <br>
        <label for="correo">correo</label>
        <input type="text" name="correo" value="{{old('correo', $visualizar->correo)}}">
        <br>
       <button type="submit">actualizar</button>
    </form>
</body>
</html>
