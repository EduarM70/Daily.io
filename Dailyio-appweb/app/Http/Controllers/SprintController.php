<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use App\Models\Sprint;
use Illuminate\Http\Request;

class SprintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("sprints");
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
        // Crear un nuevo Sprint

        $request->validate([
            "name"=> "required",
            "priority"=> "required",
            "proyect_id" => "required"
        ]);

        // buscamos el proyecto por el id
        $proyecto = Proyect::find( $request->get("proyect_id"));

        // Crear un nuevo sprint asociado al proyecto

        $sprint = new Sprint([
            "priority"=> $request->get("priority"),
        ]);
        // guardamos el sprint
        $proyecto->sprints()->save($sprint);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sprint $sprint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sprint $sprint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sprint $sprint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sprint $sprint)
    {
        //
    }
}
