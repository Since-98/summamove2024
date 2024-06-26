<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Oefening;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Log::info('Oefeningen index opgevraagd', [
            'ip' => $request->ip(),
            'data' => $request->all()
        ]);

        return response()->json([
            'success' => true,
            'data' => Oefening::all(),
        ], 200);
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
         $validator = Validator::make($request->all(), [
             'naam' => 'required|string|max:255',
             'beschrijving' => 'required|string|max:255',
         ]);

         if ($validator->fails()) {
             Log::error("Oefeningen opslaan fout", ['errors' => $validator->errors()]);
             return response()->json([
                 'success' => false,
                 'foutmelding' => 'Data niet correct',
                 'errors' => $validator->errors(),
             ], 400);
         }

         $oefening = Oefening::create(array_merge($request->all(), ['user_id' => Auth::id()]));

         Log::info('Nieuwe oefening opgeslagen', [
             'ip' => $request->ip(),
             'oefening_id' => $oefening->id,
             'data' => $request->all(),
         ]);

         return response()->json([
             'success' => true,
             'data' => $oefening,
         ], 201);
     }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
    //  */
    // public function update(Request $request,  Oefening $oefeningen)
    // {
    //     Log::info('Oefeningen bijwerken', [
    //         'ip' => $request->ip(),
    //         'oefeningenid' => $oefeningen->id,
    //         'data' => $request->all(),
    //     ]);

    //     $validator = Validator::make($request->all(), [
    //         'naam' => 'required|string|max:255',
    //         'beschrijving' => 'required|string|max:255',
    //     ]);

    //     if ($validator->fails()) {
    //         Log::error("Oefeningen bijwerken fout", ['errors' => $validator->errors()]);
    //         return response()->json([
    //             'success' => false,
    //             'foutmelding' => 'Data niet correct',
    //             'errors' => $validator->errors(),
    //         ], 400);
    //     }

    //     $oefeningen->update($request->all());

    //     return response()->json([
    //         'success' => true,
    //         'data' => $oefeningen,
    //     ], 200);
    // }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(Oefening $oefeningen)
     {
         Log::info('Oefeningen verwijderen', [
             'oefeningenid' => $oefeningen->id
         ]);

         $oefeningen->delete();

         return response()->json([
             'success' => true,
             'message' => 'Oefeningen verwijderd',
         ], 200);
     }
}
