<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulario para crear  una categoria</h1>
    {{-- @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
 --}}
    <form action="{{route('pruebas.create')}}" method="POST">
        
        @csrf

        <label for="name">nombre</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <br>
        <br>
        <label for="lastname">apellido</label>
        <input type="text" name="lastname" value="{{old('lastname')}}">
        @error('lastname')
            <p>{{$message}}</p>
        @enderror
        <br>
        <br>
        <label for="correo">correo</label>
        <input type="text" name="correo" value="{{old('correo')}}">
        @error('correo')
            <p>{{$message}}</p>
        @enderror
        <br>
        <br>
       <button type="submit">crear</button>
    </form>
</body>
</html>
