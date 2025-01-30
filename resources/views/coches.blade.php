<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coches</title>
</head>
<body>
    <h1>Coches Disponibles</h1>

    <form action="{{ route('listaCoches') }}" method="get">
        <label for="marca">Marca: <input type="text" id="marca" name="marca" placeholder="Filtra por marca..." required></label>
        <input type="submit" value="Filtrar">
    </form>

    <ul>
        @foreach ($coches as $coche)
            <li>
                Marca: {{ $coche->marca }} <br>
                Modelo: {{ $coche->modelo }} <br>
                Color: {{ $coche->color }} <br>
                Precio: {{ $coche->precio }} € <br>
                <a href="{{ route('editarCoche', $coche->id) }}">Editar</a>
                <form action="{{ route('eliminarCoche', $coche->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>

    <a href="{{ route('crearCoche') }}">Agregar coche</a>
</body>
</html>