<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Models\Personas;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index')->with('persona',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas = new persona();
        $personas->nombre = $request->get('nombre');
        $personas->appaterno = $request->get('appaterno');
        $personas->apmaterno = $request->get('apmaterno');
        $personas->fechanacimiento = $request->get('fechanacimiento');
        $personas->sexo = $request->get('sexo');
        $personas->estadocivil = $request->get('estadocivil');
        $personas->pais = $request->get('pais');
        

        $personas->save();

        return redirect('/personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('persona.edit')->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = persona::find($id);

        $persona->nombre = $request->get('nombre');
        $persona->appaterno = $request->get('appaterno');
        $persona->apmaterno = $request->get('apmaterno');
        $persona->fechanacimiento = $request->get('fechanacimiento');
        $persona->sexo = $request->get('sexo');
        $persona->estadocivil = $request->get('estadocivil');
        $persona->pais = $request->get('pais');
        

        $persona->save();

        return redirect('/personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect('/personas');
    }
}
