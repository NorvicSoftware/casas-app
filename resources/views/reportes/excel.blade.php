<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Telefono</th>
            <th>Correo electronico</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre}}</td>
            <td>{{ $cliente->telefono}}</td>
            <td>{{ $cliente->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>