<?php

namespace App\Http\Controllers;

use App\Models\Meet;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        // dd($request->all());

        $request->validate([
            "title" => "required",
            "description"=> "required",
            "proyect_id" => "required",
            "plataform"=> "required",
            "date" => "required|date|after_or_equal:today",
            "time"=> "required|date_format:H:i",
        ]);

        

        $newMeet = Meet::create([
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "proyect_id" => $request->get("proyect_id"),
            "plataform" => $request->get("plataform"),
            "user_id" => auth()->user()->id,
            "date" => $request->get("date"),
            "time"=> $request->get("time")
        ]);

        if($newMeet){
            return to_route("proyect.index");
        }else{
            return to_route("tareas");
        }



        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Meet $meet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meet $meet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meet $meet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meet $meet)
    {
        //
    }
}
