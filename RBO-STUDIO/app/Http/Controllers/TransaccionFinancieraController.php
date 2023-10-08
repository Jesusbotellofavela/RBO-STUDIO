<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Models\TransaccionFinanciera;
use Illuminate\Http\Request;

class TransaccionFinancieraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaccionFinanciera=TransaccionFinanciera::all();
        return view('TransaccionFinancieraIndex', compact('transaccionFinanciera'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('transaccionfinancieracreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $transaccionFinanciera = new TransaccionFinanciera();
        $transaccionFinanciera -> id = $request -> input('transaccion_id');
        $transaccionFinanciera -> tipo_transaccion = $request -> input('tipo_transaccion');
        $transaccionFinanciera -> monto = $request -> input('monto');
        $transaccionFinanciera -> fecha_transaccion= $request -> input('fecha_transaccion');
        $TransaccionFinanciera -> save();
        return view('TransaccionFinancieraIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaccionFinanciera $transaccionFinanciera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaccionFinanciera $transaccionFinanciera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransaccionFinanciera $transaccionFinanciera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaccionFinanciera $transaccionFinanciera)
    {
        //
    }
}
