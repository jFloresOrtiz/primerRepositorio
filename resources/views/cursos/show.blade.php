@extends('layouts.plantilla')

@section('title','Curso'.$curso->name)
@section('content')
<h1>bienvenido al curso de {{$curso->name}}</h1>
<a href="{{Route('cursos.index')}}">Regresar a los cursos</a><br>
<a href="{{Route('cursos.edit' , $curso)}}">Editar Curso</a>

<p> Categoria: {{$curso->category}}</p>
<p> Descripcion: {{$curso->description}}</p>

@endsection

