<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Tareas</title>
</head>
<body>
    <h1>Listado de Tareas</h1>
    <a href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->nombre_tarea }}</li>
        @endforeach
    </ul>
</body>
</html>
