@extends('plantilla')
@section('contenido')
    <x-menu />
    <h1>LISTADO DE CLIENTES</h1>
    <a href="clientes/crear">CREAR NUEVO CLIENTE</a>
    <a href="clientes/reportes/listadoclientes">GENERAR REPORTE PDF</a>
    <a href="clientes/reportes/excel">GENERAR REPORTE EXCEL</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>
                        <a href="clientes/mostrar/{{ $cliente->id }}">MOSTRAR</a>
                        <a href="clientes/editar/{{ $cliente->id }}">EDITAR</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <x-menu />
    <x-menu />
@endsection