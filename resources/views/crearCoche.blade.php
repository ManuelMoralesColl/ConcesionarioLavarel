<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1>Crear Coche</h1>

    <form action="{{ route('listaCoches') }}" method="post">
        @csrf
        <label for="marca">Marca: <input type="text" id="marca" name="marca" placeholder="Marca..." required></label>
        <label for="modelo">Modelo: <input type="text" id="modelo" name="modelo" placeholder="Modelo..." required></label>
        <label for="color">Color: <input type="text" id="color" name="color" placeholder="Color..." required></label>
        <label for="precio">Precio: <input type="number" id="precio" name="precio" placeholder="Precio..." required></label>
        <input type="submit" value="Crear">
    </form>

    <br>

    <a href="{{ route('listaCoches') }}">Volver</a>
</body>
</html>