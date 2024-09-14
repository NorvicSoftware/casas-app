@extends('plantilla')
@section('contenido')
<x-menu />
<h1>NUEVO CLIENTE</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" />
    </div>
    <div>
        <label>Telefono</label>
        <input type="text" name="telefono" />
    </div>
    <div>
        <label>Correo electronico</label>
        <input type="text" name="email" />
    </div>
    <div>
        <label>Direccion</label>
        <input type="text" name="direccion" />
    </div>
    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
@endsection