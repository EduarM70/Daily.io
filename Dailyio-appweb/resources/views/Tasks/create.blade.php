<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Tarea</title>
</head>
<body>
    <h1>Crear Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="nombre_tarea">Nombre de la Tarea:</label><br>
        <input type="text" id="nombre_tarea" name="nombre_tarea"><br>
        <label for="prioridad">Prioridad:</label><br>
        <select name="prioridad" id="prioridad">
            <option value="baja">Baja</option>
            <option value="media">Media</option>
            <option value="alta">Alta</option>
        </select><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion"></textarea><br>
        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio"><br>
        <button type="submit">Guardar Tarea</button>
    </form>
</body>
</html>

