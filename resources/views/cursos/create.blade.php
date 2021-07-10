@extends('layouts.plantilla')

@section('title','cursos/create')
@section('content')
<h1>CREAR CURSOS</h1>

<form action="{{Route('cursos.store')}}", method="POST">
    @csrf

    <label>Nombre curso</label><br>
    <input type="text" name="name" value="{{old('name')}}"><br>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>Categoria</label><br>
    <input type="text" name="category" value="{{old('category')}}"><br>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    
    <br>
    <label>Descripcion</label><br>
     <textarea name="description">{{old('description')}}</textarea><br>

     @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <input type="submit" value="Crear curso">

</form>
@endsection
