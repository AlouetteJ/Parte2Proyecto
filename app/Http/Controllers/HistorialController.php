<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorialController extends Controller
{
    public function _construct()
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
        return view('pacientes.pacientesIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.historial_form');
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
            'peso'=> 'max:5',
            'estatura' => 'max:4'  
        ]);

        $historial = new Historial();
        $historial->motivos = $request->motivos;
        $historial->peso = $request->peso;
        $historial->estatura = $request->estatura;
        $historial->complexion = $request->complexion;
        $historial->tez = $request->tez;
        $historial->alerta = $request->alerta;
        $historial->marcha = $request->marcha;
        $historial->vestimenta = $request->vestimenta;
        $historial->accesorios = $request->accesorios;
        $historial->lesiones = $request->cicatrices;
        $historial->lesiones = $request->lesiones;
        $historial->cabeza = $request->cabeza;
        $historial->orejas = $request->orejas;
        $historial->ojos = $request->ojos;
        $historial->nariz = $request->nariz;
        $historial->boca = $request->boca;
        $historial->cabello = $request->cabello;
        $historial->cejas = $request->cejas;
        $historial->mandibula = $request->mandibula;
        $historial->cuello = $request->cuello;
        $historial->dientes = $request->dientes;
        $historial->padre = $request->padre;
        $historial->padrevive = $request->padrevive;
        $historial->madre = $request->madre;
        $historial->madrevive = $request->madrevive;
        $historial->hermano = $request->hermano;
        $historial->hermanos = $request->hermanos;
        $historial->hermana = $request->hermana;
        $historial->hermanas = $request->hermanas;
        $historial->hijo = $request->hijo;
        $historial->hijos = $request->hijos;
        $historial->hija = $request->hija;
        $historial->hijas = $request->hijas;
        $historial->numerohijo = $request->numerohijo;
        $historial->vive = $request->vive;
        $historial->habitos = $request->habitos;
        $historial->alcohol = $request->alcohol;
        $historial->drogas = $request->drogas;
        $historial->alimentacion = $request->alimentacion;
        $historial->sueño = $request->sueño;
        $historial->pruebas = $request->pruebas;
        $historial->pruebas_aplicadas = $request->pruebas_aplicadas;
        $historial->diagnostico = $request->diagnostico;
        $historial->anotaciones = $request->anotaciones;
        $historial->pronostico = $request->pronostico;
        $paciente = Paciente::find($request->paciente_id);
        $paciente->historial()->save($historial);

        return redirect()->route('paciente.show',$paciente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(Historial $historial)
    {
        return view('pacientes.pacientesShow',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(Historial $historial)
    {
        return view('historiales.historialEdit', compact('historial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historial $historial)
    {
        $request->validate([
            'peso'=> 'max:5',
            'estatura' => 'max:4'  
        ]);

        Historial::where('id', $historial->id)->update($request->except('_token', '_method'));

        return redirect()->route('paciente.show',$historial->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historial $historial)
    {
        $this->authorize('delete',$historial);
        $historial->delete();
        $paciente = Paciente::find($request->paciente_id);
        return redirect()->route('paciente.show',$paciente->id);
    }
}
