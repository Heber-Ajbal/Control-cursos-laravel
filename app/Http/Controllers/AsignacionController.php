<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Asignacion;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion = Asignacion::create($request->all());
        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curso)
    {

        $curso = Curso::find($curso);
         $alumnos = User::join('Asignacions','Users.id','=','Asignacions.user_id')->join('Cursos','Cursos.id','=','Asignacions.curso_id')
        ->select(['Users.id','Users.name','Asignacions.nota','Asignacions.id as idAssig'])->where('Cursos.id','=',$curso->id)->orderBy('Users.id','ASC')->paginate(5);

         $NewAlumnos = User::join('Asignacions','Users.id','=','Asignacions.user_id')->join('Cursos','Cursos.id','=','Asignacions.curso_id')
         ->select(['Users.id','Users.name','Asignacions.nota','Asignacions.id as idAssig'])
         ->where('Cursos.id','!=',$curso->id)->get();

         return view('asignacion.show', compact('alumnos','curso','NewAlumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignacione = Asignacion::find($id);
        $alumno = User::find($asignacione->user_id);
        $curso = Curso::find($asignacione->curso_id);
        $actividades = Actividad::where('curso_id','=',$curso->id)->get();
        return view('asignacion.edit',compact('asignacione','alumno','curso','actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacione)
    {
        $asignacione->update($request->all());
        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $asignacion = Asignacion::find($id);
         $asignacion->delete();

        return redirect()->route('cursos.show',);
    }
}
