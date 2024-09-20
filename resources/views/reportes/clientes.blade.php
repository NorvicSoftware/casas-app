<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: #ed2f0c;
        }
    </style>
</head>

<body>
    <h1>LISTADO DE CLIENTES</h1>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Propiedades</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre}}</td>
                <td>{{ $cliente->telefono}}</td>
                <td>{{ $cliente->email}}</td>

                <td>
                    @foreach ($cliente->propiedades as $propiedad)
                    {{ $propiedad->nombre }} <br>
                    @endforeach
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>