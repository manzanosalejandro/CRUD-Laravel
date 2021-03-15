<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view("estudiante.nuevo");
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
        $estudiante= new Estudiante($request->input());
        $estudiante->saveOrFail();
        $estudiantes=Estudiante::All();
        return  view("estudiante.listado",["estudiantes"=>$estudiantes,
            "msj"=>"El estudiante $estudiante->nombre ha sido introducido"]);
//        dd($estudiante);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view("listado.edit",["estudiante"=>$estudiante]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->fill($request->input())->saveOrFail();
        $estudiantes=Estudiante::All();
        return  view("estudiante.listado",["estudiantes"=>$estudiantes,
            "msj"=>"El estudiante $estudiante->nombre ha sido modificado"]);
    }
    public function index(){
        $estudiantes=Estudiante::All();
        return view("estudiante.listar",['estudiante'=>$estudiantes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        $estudiantes=Estudiante::All();
        return  view("estudiante.listado",["estudiantes"=>$estudiantes,
            "msj"=>"El estudiante $estudiante->nombre ha sido borrado"]);
        //
    }
}
