@extends('layouts.plantilla')

@section('title','cursos/edit')
@section('content')
<h1>EDITAR CURSOS</h1>

<form action="{{Route('cursos.update',$curso)}}", method="post">
    @csrf
    @method('put')

    <label>Nombre curso</label><br>
    <input type="text" name="name" value="{{$curso->name}}"><br>

    <label>Categoria</label><br>
    <input type="text" name="category" value="{{$curso->category}}"><br>

    <label>Descripcion</label><br>
     <textarea name="description">{{$curso->description}}</textarea><br><br>

    <input type="submit" value="Actualizar curso">

</form>
@endsection
