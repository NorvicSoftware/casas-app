<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Exception;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::get();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //esta parte donde tengo que validar la informacion
        $request->validate([
            'nombre' => 'required|min:5|max:50|unique:clientes',
            'telefono' => 'nullable|min:8|max:15',
            'email' => 'nullable|email',
        ]);

        try{
            $cliente= new cliente();
            $cliente->nombre= $request->nombre;
            $cliente->telefono= $request->telefono;
            $cliente->email= $request->email;
            $cliente->direccion= $request->direccion;
            $cliente->save();
            
            return redirect()->action([ClienteController::class, 'index']);
        }
        catch(Exception $exc) {
            return redirect()->action([ClienteController::class, 'create']);
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.mostrar', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editar', ['cliente' => $cliente]);
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

        return redirect()->action([ClienteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->action([ClienteController::class, 'index']);
    }
}
