<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facade\DB;
use App\Http\Controllers\Controller;
use App\Models\abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abonne = abonne::all();

        return response()->json([
            'status' => true,
            'abonne' => $abonne
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abonne = abonne::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "abonné crée avec succès!",
            'abonne' => $abonne
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, abonne $abonne)
    {
        $abonne->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "abonné modifié avec succès!",
            'abonne' => $abonne
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(abonne $abonne)
    {
        $abonne->delete();

        return response()->json([
            'status' => true,
            'message' => "abonné Supprmé avec succès!",
        ], 200);
    }
    public function onoff( $id)
    {
        try{
        \DB::begintransaction();   
        $part=abonne::find($id);
        $part->etat = !($part -> etat);
        $part->update();
        \DB::commit();
        return response()->json("operation reussie");
        }
        catch(Throwable $th){
            dd($th);
            return response()->json("echec de l'operation");
        
        }

    }
}
