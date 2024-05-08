<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // retornar a la vista de Proyectos
        return view('proyects', ['proyectos' => Proyect::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar datos
        $request->validate([
            "nameProyect" => "required|min:10",
            "date" => "required|date|after_or_equal:today",
            "descripcion"=> "required|min:25",
            "goals"=> "required|min:25",
        ]);
        // creando proyecto
        $request->user()->proyects()->create([
            "name"=> $request->get("nameProyect"),
            "fecha_inicio" => $request->get("date"),
            "descripcion" => $request->get("description"),
            "goals"=> $request->get("goals"),
        ]);
        
        return to_route('proyect.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Proyect $proyect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyect $proyect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyect $proyect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyect $proyect)
    {
        //
    }
}
