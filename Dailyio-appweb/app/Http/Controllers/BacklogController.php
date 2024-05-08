<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backlog;

class BacklogController extends Controller
{
    public function index()
    {
        // Método para mostrar todos los backlogs
        $backlogs = Backlog::all();
        return view('backlogs.index', compact('backlogs'));
    }

    public function create()
    {
        // Método para mostrar el formulario de creación de un nuevo backlog
        return view('backlogs.create');
    }

    public function store(Request $request)
    {
        // Método para almacenar un nuevo backlog en la base de datos
        $validatedData = $request->validate([
            'project_id' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        Backlog::create($validatedData);

        return redirect()->route('backlogs.index');
    }

    public function destroy($id)
    {
        // Método para eliminar un backlog existente de la base de datos
        $backlog = Backlog::findOrFail($id);
        $backlog->delete();
        return redirect()->route('backlogs.index');
    }
}

