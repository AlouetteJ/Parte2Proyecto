<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
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
            'nacimiento'=> 'required|date',
            'correo'=> 'required',
            'telefono'=> 'required|min:10',
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

        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellidos = $request->apellidos;
        $paciente->nacimiento = $request->nacimiento;
        $paciente->correo = $request->correo;
        $paciente->telefono = $request->telefono;
        $paciente->genero = $request->genero;
        $paciente->pronombre = $request->pronombre;
        $paciente->orientacion = $request->orientacion;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->edocivil = $request->edocivil;
        $paciente->nacionalidad = $request->nacionalidad;
        $paciente->resactual = $request->resactual;
        $paciente->resanterior = $request->resanterior;
        $paciente->estudios = $request->estudios;
        $paciente->motivo = $request->motivo;
        Auth::user()->paciente()->save($paciente);

        return redirect()->route('paciente.show',$paciente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        $historial = $paciente->historial;
        return view('pacientes.pacientesShow',compact('paciente','historial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $user = Auth::user();
        $paciente = $user->paciente;
        return view('pacientes.pacientesEdit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente,)
    {
        $request->validate([
            'nombre'=> 'required|max:255',
            'apellidos'=> 'required|max:255',
            'nacimiento'=> 'required|date',
            'correo'=> 'required',
            'telefono'=> 'required|min:10',
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

        return redirect()->route('paciente.show',$paciente->id);
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
