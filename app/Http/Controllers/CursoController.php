<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cursos =  Curso::all();
        return view('cursos.index')->with('cursos',$cursos);
    }

    public function inscribir()
    {
        $cursos =  Curso::all();
        return view('cursos.inscribir')->with('cursos',$cursos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'f_inicio'=>'required',
            'f_fin'=>'required',
            'duracion'=>'required',
            'status'=>'required',

        ]);

        $cursos = new Curso();

        $cursos->nombre = $request->GET('nombre');
        $cursos->descripcion = $request->GET('descripcion');
        $cursos->f_inicio = $request->GET('f_inicio');
        $cursos->f_fin = $request->GET('f_fin');
        $cursos->duracion = $request->GET('duracion');
        $cursos->status = $request->GET('status');
        

        $cursos->save();

        return redirect('/cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso =  Curso::find($id);
        return view('cursos.edit')->with('curso',$curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso = new Curso();

        $curso->nombre = $request->GET('nombre');
        $curso->f_inicio = $request->GET('f_inicio');
        $curso->f_fin = $request->GET('f_fin');
        $curso->duracion = $request->GET('duracion');
        $curso->descripcion = $request->GET('descripcionn');
        $curso->status = $request->GET('status');
        

        $personas->save();

        return redirect('/cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('/cursos');
    }
}
