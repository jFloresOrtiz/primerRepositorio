@extends('layouts.plantilla')

@section('title','Curso'.$curso)
@section('content')
<h1>bienvenido al curso de {{$curso->name}}</h1>
<a href="{{Route('cursos.index')}}">Regresar a los cursos</a>

<p> Categoria: {{$curso->category}}</p>
<p> Descripcion: {{$curso->description}}</p>

@endsection

