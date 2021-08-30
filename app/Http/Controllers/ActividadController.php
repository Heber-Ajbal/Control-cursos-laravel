<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Curso;
use Illuminate\Http\Request;

class ActividadController extends Controller
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
        $actividad = Actividad::create($request->all());
        $curso= Curso::Find($actividad->curso_id);

        return redirect()->route('cursos.show', $curso);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividade)
    {

        return view('actividades.show', compact('actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $actividad)
    {
        $actividad = Actividad::find($actividad);
        return view('actividades.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividade)
    {
        $curso = Curso::Find($actividade->curso_id);

        $request->validate([
            'nombre' => "required",
            'descripcion' => "required",

        ]);

        $actividade->update($request->all());

        return redirect()->route('actividades.show', $actividade);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($actividad)
    {


        $idAC =Actividad::find($actividad);
        $curso= Curso::Find($idAC->curso_id);
        $actividad = Actividad::find($actividad)->delete();

        return redirect()->route('cursos.show', $curso);
    }
}
