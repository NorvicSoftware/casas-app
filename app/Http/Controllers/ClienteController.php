<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::where('nombre', 'like', '%A%')->get();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente=new cliente();
        $cliente->nombre= $request->nombre;
        $cliente->telefono= $request->telefono;
        $cliente->email= $request->email;
        $cliente->direccion= $request->direccion;
        $cliente->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente=Cliente::find($id);
        return view('clientes.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente=Cliente::find($id);
        $cliente->nombre= $request->nombre;
        $cliente->telefono= $request->telefono;
        $cliente->email= $request->email;
        $cliente->direccion= $request->direccion;
        $cliente->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
    }
}
