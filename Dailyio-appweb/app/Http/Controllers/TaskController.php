<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task; 
use Illuminate\Validation\Rule; 

class TaskController extends Controller
{
    public function index()
    {
        // Obtener todas las tareas sin excepción
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        // Retorna la vista para crear una nueva tarea
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_id' => 'required|exists:project_id',
            'nombre_tarea' => 'required|string|max:255',
            'prioridad' => ['required', Rule::in(['baja', 'media', 'alta'])],
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required',
        ]);

        Task::create($validatedData);

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        // Retorna la vista para editar una tarea específica
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'project_id' => 'required|exists:project_id',
            'nombre_tarea' => 'required|string|max:255',
            'prioridad' => ['required', Rule::in(['baja', 'media', 'alta'])],
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'required',
        ]);

        $task->update($validatedData);

        return redirect()->route('tasks.index')->with('success', '¡Tarea actualizada exitosamente!');
    }
}
