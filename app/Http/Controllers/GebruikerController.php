<?php

namespace App\Http\Controllers;

use App\Models\gebruiker;
use Illuminate\Http\Request;

class GebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = [
            'success' => true,
            'data'    => gebruiker::All(),
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gebruiker $gebruiker)
    {
        $response = [
            'success' => true,
            'data'    =>  $gebruiker,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gebruiker $gebruiker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gebruiker $gebruiker)
    {
        //
    }
}
