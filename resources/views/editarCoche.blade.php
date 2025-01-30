<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1>Editar Coche</h1>

    <form action="{{ route('actualizarCoche', $coche->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="marca">Marca: <input type="text" id="marca" name="marca" placeholder="Marca..." value="{{ old('marca', $coche->marca)}}" required></label>
        <label for="modelo">Modelo: <input type="text" id="modelo" name="modelo" placeholder="Modelo..." value="{{ old('modelo', $coche->modelo)}}" required></label>
        <label for="color">Color: <input type="text" id="color" name="color" placeholder="Color..." value="{{ old('color', $coche->color)}}" required></label>
        <label for="precio">Precio: <input type="number" id="precio" name="precio" placeholder="Precio..." value="{{ old('precio', $coche->precio)}}" required></label>
        <input type="submit" value="Guardar cambios">
    </form>

    <br>

    <a href="{{ route('listaCoches') }}">Volver</a>
</body>
</html>