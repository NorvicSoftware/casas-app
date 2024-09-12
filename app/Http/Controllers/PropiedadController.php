<?php

namespace App\Http\Controllers;
use App\Models\Propiedad
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedad::all();
        return view('propiedades.index', ['propiedades' => $propiedades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propiedades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $propiedad = new Propiedad();
        $propiedad->nombre = $request->nombre;
        $propiedad->precio = $request->precio;
        $propiedad->tipo = $request->tipo;
        $propiedad->ubicacion = $request->ubicacion;
        $propiedad->superficie = $request->superficie;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->propietario_id = $request->propietario_id;
        $propiedad->vendedor_id = $request->vendedor_id;
        $propiedad->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propiedad = Propiedad::find($id);
        return view('propiedades.show', ['propiedad' => $propiedad]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propiedad = Propiedad::find($id);
        return view('propiedades.edit', ['propiedad' => $propiedad]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->nombre = $request->nombre;
        $propiedad->precio = $request->precio;
        $propiedad->tipo = $request->tipo;
        $propiedad->ubicacion = $request->ubicacion;
        $propiedad->superficie = $request->superficie;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->propietario_id = $request->propietario_id;
        $propiedad->vendedor_id = $request->vendedor_id;
        $propiedad->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->delete();
    }
}
