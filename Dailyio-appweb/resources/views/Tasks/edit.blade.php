<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre_tarea">Nombre de la Tarea:</label><br>
        <input type="text" id="nombre_tarea" name="nombre_tarea" value="{{ $task->nombre_tarea }}"><br>
        <label for="prioridad">Prioridad:</label><br>
        <select name="prioridad" id="prioridad">
            <option value="baja" {{ $task->prioridad == 'baja' ? 'selected' : '' }}>Baja</option>
            <option value="media" {{ $task->prioridad == 'media' ? 'selected' : '' }}>Media</option>
            <option value="alta" {{ $task->prioridad == 'alta' ? 'selected' : '' }}>Alta</option>
        </select><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion">{{ $task->descripcion }}</textarea><br>
        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $task->fecha_inicio }}"><br>
        <button type="submit">Actualizar Tarea</button>
    </form>
</body>
</html>
