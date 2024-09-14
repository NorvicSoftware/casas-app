@extends('plantilla')
@section('contenido')
<x-menu />
    <h2>EDITAR CLIENTE</h2>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" value="{{ $cliente->nombre }}" name="nombre" />
        </div>
        <div>
            <label>Telefono</label>
            <input type="text" value="{{ $cliente->telefono }}" name="telefono" />
        </div>
        <div>
            <label>Correo electronico</label>
            <input type="text" value="{{ $cliente->email }}" name="email" />
        </div>
        <div>
            <label>Direccion</label>
            <input type="text" value="{{  $cliente->direccion }}" name="direccion" />
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
@endsection