@extends('layouts.plantilla')

@section('title','cursos')
@section('content')
<h1>bienvenido a la pagina de cursos</h1>
<a href="{{Route('cursos.create')}}">Crear un nuevo curso</a>

@foreach ($cursos as $curso)
    <ul>
        <a href="{{Route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
    </ul>
    
@endforeach
{{$cursos->links()}}
@endsection
