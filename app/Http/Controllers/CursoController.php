<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderby('id','desc')->paginate();
        
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }
    public function store(Request $request){
          $curso = new Curso;
          $curso->name= $request->name;
          $curso->category= $request->category;
          $curso->description= $request->description;

          $curso->save();
          return redirect()->route('cursos.show',$curso->id);


    }
    public function edit(Curso $curso){
        
        return view('cursos.edit', compact('curso'));

    }
    public function update(Request $request,Curso $curso){
       $curso->name = $request->name;
       $curso->description = $request->description;
       $curso->category = $request->category;
       
       $curso->save();

       return redirect()->route('cursos.show',$curso->id);


    }
}
