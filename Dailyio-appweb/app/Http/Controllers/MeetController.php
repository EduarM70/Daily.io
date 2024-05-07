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
        //
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
        
        $request->validate([
            "description"=> "required",
            "proyect_id" => "required",
            "plataform"=> "required",
        ]);
        
        //
        Meet::create([
            "description"=> $request->description,
            "proyect_id"=> $request->poryect_id,
            "plataform"=> $request->plataform,
            "user_id" => auth()->user()->id
        ]);
        
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
