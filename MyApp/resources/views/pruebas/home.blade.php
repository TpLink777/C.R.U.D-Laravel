@extends('layouts.index')

@section('title', 'pagina principal')

@section('head')
    <h1>aca se empezaran a mostar todas las categorias</h1>
    <br>

@endsection

@section('content')

  <a href="{{route('pruebas.create')}}">si deseas crear un categoria porfavor da click</a>
  <br>
  <br>
    <ul>
        @foreach ( $categories as $categorie )
            <li>
                <a href="{{route('pruebas.visualizar' , $categorie->id)}}">{{$categorie->name}} </a>
            </li>
        @endforeach
    </ul>

    {{$categories->links()}}
@endsection 


   