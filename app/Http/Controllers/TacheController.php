<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tache::all());
    }


    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(Tache::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $tache)
    {
        return response()->json($tache);
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tache $tache)
    {
        $tache->update($request->all());
        return response()->json($tache);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $tache)
    {
        $tache->delete();
        return response()->json(null, 204);
    }
}
