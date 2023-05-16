<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facade\DB;
use App\Models\abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("formulaire_abonne");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abonne = abonne :: all();
        return view("liste_abonne", compact("abonne"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = validate([
            'nom'=>'required',
            'prenom'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'profession'=>'required',
            'rue'=>'required',
            'code_postal'=>'required',
            'ville'=>'required',
            'pays'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'id_abonne'=>'required',
            
        
        ]);
        try{
            \DB::beginTransaction();

            $abonne = new abonne;
            $abonne->nom=$request->nom;
            $abonne->prenom=$request->prenom;
            $abonne->age=$request->age;
            $abonne->sexe=$request->sexe;
            $abonne->profession=$request->profession;
            $abonne->rue=$request->$rue;
            $abonne->code_postal=$request->code_postal;
            $abonne->ville=$request->ville;
            $abonne->pays=$request->pays;
            $abonne->telephone=$request->telephone;
            $abonne->email=$request->email;
            $abonne->id_abonne=$request->id_abonne;
            
            $abonne->save();
            \DB::commit(); 
            return redirect("formulaire_abonne")->with('success','Le formulaire a ete enregistrer avec succes!');
        } catch(\Thowable $th){
            return back()->with('erreur','Le formulaire n\'a pas été enregistré');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(abonne $abonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, abonne $abonne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(abonne $abonne)
    {
        //
    }
}
