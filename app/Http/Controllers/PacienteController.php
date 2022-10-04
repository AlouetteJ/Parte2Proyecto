<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.pacientesIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.paciente_form');
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
            'nombre'=> 'required|max:255',
            'apellidos'=> 'required|max:255',
            'edad'=> 'required|max:2',
            'nacimiento'=> 'required|date',
            'correo'=> 'required',
            'telefono'=> 'required|max:10',
            'genero'=> 'required',
            'pronombre'=> 'required|max:255',
            'orientacion'=> 'required|max:255',
            'ocupacion'=> 'required|max:255',
            'edocivil'=> 'required',
            'nacionalidad'=> 'required|max:255',
            'resactual'=> 'required|max:255',
            'resanterior'=> 'required|max:255',
            'estudios'=> 'required|max:255',
            'motivo'=> 'required',
        ]);

        Paciente::create($request->all());

        return redirect('/paciente/create')->with('message','¡Guardado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes.pacientesShow',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.pacientesEdit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre'=> 'required|max:255',
            'apellidos'=> 'required|max:255',
            'edad'=> 'required|max:2',
            'nacimiento'=> 'required|date',
            'correo'=> 'required',
            'telefono'=> 'required|max:10',
            'genero'=> 'required',
            'pronombre'=> 'required|max:255',
            'orientacion'=> 'required|max:255',
            'ocupacion'=> 'required|max:255',
            'edocivil'=> 'required',
            'nacionalidad'=> 'required|max:255',
            'resactual'=> 'required|max:255',
            'resanterior'=> 'required|max:255',
            'estudios'=> 'required|max:255',
            'motivo'=> 'required',
        ]);

        Paciente::where('id', $paciente->id)->update($request->except('_token', '_method','ine'));

        return redirect('/paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect('/paciente');
    }
}
