<?php

namespace App\Http\Controllers;
use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transacciones = Transaccion::all();
        return view('transacciones.index', ['transacciones' => $transacciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transacciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new Transaccion();
        $transaccion->tipo = $request->tipo;
        $transaccion->fecha = $request->fecha;
        $transaccion->costo = $request->costo;
        $transaccion->numero = $request->numero;
        $transaccion->propiedad_id = $request->propiedad_id;
        $transaccion->cliente_id = $request->cliente_id;
        $transaccion->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaccion = Transaccion::find($id);
        return view('transacciones.show', ['transaccion' => $transaccion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaccion = Transaccion::find($id);
        return view('transacciones.edit', ['transaccion' => $transaccion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaccion = Transaccion::find($id);
        $transaccion->tipo = $request->tipo;
        $transaccion->fecha = $request->fecha;
        $transaccion->costo = $request->costo;
        $transaccion->numero = $request->numero;
        $transaccion->propiedad_id = $request->propiedad_id;
        $transaccion->cliente_id = $request->cliente_id;
        $transaccion->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaccion = Transaccion::find($id);
        $transaccion->delete();
    }
}
