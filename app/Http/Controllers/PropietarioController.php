<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;
class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propietarios = Propietario::all();
        return view('propietarios.index', ['propietarios' => $propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $propietario = new Propietario();
        $propietario->nombre = $request->nombre;
        $propietario->telefono = $request->telefono;
        $propietario->email = $request->email;
        $propietario->direccion = $request->direccion;
        $propietario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propietario = Propietario::find($id);
        return view('propietarios.show', ['propietario' => $propietario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propietario = Propietario::find($id);
        return view('propietarios.edit', ['propietario' => $propietario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propietario = Propietario::findOrFail($id);
        $propietario->nombre = $request->nombre;
        $propietario->telefono = $request->telefono;
        $propietario->email = $request->email;
        $propietario->direccion = $request->direccion;
        $propietario->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propietario = Propietario::find($id);
        $propietario->delete();
    }
}
