<?php

namespace App\Http\Controllers;
use App\Models\Models\EquipoFotografico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipoFotograficoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipoFotografico=EquipoFotografico::all();
        return view('EquipoFotograficoIndex', compact('equipoFotografico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('EquipoFotograficoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $equipoFotografico = new EquipoFotografico();
        $equipoFotografico -> id = $request -> input('equipo_id');
        $equipoFotografico -> nombre = $request -> input('nombre');
        $equipoFotografico -> cantidad_disponible = $request -> input('cantidad_disponible');
        $equipoFotografico -> descripcion = $request -> input('descripcion');
        $equipoFotografico -> precio = $request -> input('precio');
        $equipoFotografico -> save();
        return view('EquipoFotograficoIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(EquipoFotografico $equipoFotografico)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EquipoFotografico $equipoFotografico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EquipoFotografico $equipoFotografico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EquipoFotografico $equipoFotografico)
    {
        //
    }
}
