@extends('layouts.plantilla')

@section('title','cursos/create')
@section('content')
<h1>CREAR CURSOS</h1>

<form action="{{Route('cursos.store')}}", method="POST">
    @csrf
    <label>Nombre curso</label><br>
    <input type="text" name="name"><br>

    <label>Categoria</label><br>
    <input type="text" name="category"><br>

    <label>Descripcion</label><br>
     <textarea name="description"></textarea><br><br>

    <input type="submit" value="Crear curso">

</form>
@endsection
