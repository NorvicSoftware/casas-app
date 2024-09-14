@extends('plantilla')
@section('contenido')
<x-menu />
    <h1>VER CLIENTE</h1>
    <p>Nombre: {{ $cliente->nombre }}</p>
    <p>Telefono: {{ $cliente->telefono }}</p>
    <p>Correo Electronico: {{ $cliente->email }}</p>
    <p>Direccion: {{ $cliente->direccion }}</p>
    <form action="{{route('clientes.destroy', $cliente->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">ELIMINAR</button>
    </form>
@endsection