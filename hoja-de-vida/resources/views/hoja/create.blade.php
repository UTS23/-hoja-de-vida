<!-- resources/views/hoja/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Hoja de Vida</title>
</head>
<body>
    <h1>Formulario para crear la Hoja de Vida</h1>
    <form action="{{ route('hoja.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('hoja.index') }}">Volver a la página principal</a>
</body>
</html>
