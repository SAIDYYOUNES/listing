<?php

namespace App\Http\Controllers;

use App\Models\Liste;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return response()->json(Liste::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return response()->json(Liste::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Liste $liste)
    {
        return response()->json($liste);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Liste $liste)
    {
        $liste->update($request->all());
        return response()->json($liste);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liste $liste)
    {
        $liste->delete();
        return response()->json(null, 204);
    }
}
