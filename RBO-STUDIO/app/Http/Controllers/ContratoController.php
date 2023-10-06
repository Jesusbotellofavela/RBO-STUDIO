<?php

namespace App\Http\Controllers;

use App\Models\Models\Contrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contratos=Contrato::all();
        return view('ContratoIndex', compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contratoscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $contrato = new Contrato();
        $contrato -> id = $request -> input('contrato_id');
        $contrato -> fecha_inicio_contrato = $request -> input('fecha_inicio_contrato');
        $contrato -> fecha_fin_contrato = $request -> input('fecha_fin_contrato');
        $contrato -> precio = $request -> input('precio');
        $contrato -> save();
        return view('ContratoIndex');
        //return("guardado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
