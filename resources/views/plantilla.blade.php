<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App-casas</title>
</head>

<body>
    @yield('contenido')
</body>

</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: #333;
        padding: 10px;
    }

    .nav-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .nav-list li {
        margin: 0 15px;
    }

    .nav-list a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding: 10px 15px;
        transition: background-color 0.3s;
    }

    .nav-list a:hover {
        background-color: #555;
        border-radius: 5px;
    }
    p {
        color:red
    }
</style>