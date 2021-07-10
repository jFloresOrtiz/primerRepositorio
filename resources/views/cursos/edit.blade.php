@extends('layouts.plantilla')

@section('title','cursos/edit')
@section('content')
<h1>EDITAR CURSOS</h1>

<form action="{{Route('cursos.update',$curso)}}", method="post">
    @csrf
    @method('put')

    <label>Nombre curso</label><br>
    <input type="text" name="name" value="{{old('name',$curso->name)}}"><br>

    @error('name')
    <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <label>Categoria</label><br>
    <input type="text" name="category" value="{{old('category',$curso->category)}}"><br>

    @error('category')
    <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <label>Descripcion</label><br>
     <textarea name="description">{{old('description',$curso->description)}}</textarea><br><br>

     @error('description')
     <br>
         <small>*{{$message}}</small>
         <br>
     @enderror

    <input type="submit" value="Actualizar curso">

</form>
@endsection
