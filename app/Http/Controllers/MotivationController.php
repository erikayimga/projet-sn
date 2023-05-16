<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facade\DB;
use App\Models\motivation;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("formulaire_motivation");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motivation = motivation :: all();
        return view("liste_motivation", compact("motivation"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = validate([
            'intitule'=>'required',]);
            try{
                \DB::beginTransaction();
    
                $motivation = new motivation;
                $motivation->intitule=$request->intitule;
                $motivation->save();
                \DB::commit(); 
                return redirect("formulaire_motivation")->with('success','Le formulaire a ete enregistré avec succes!');
            } catch(\Thowable $th){
                return back()->with('erreur','Le formulaire n\'a pas été enregistré');
            }
            

    }

    /**
     * Display the specified resource.
     */
    public function show(motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(motivation $motivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motivation $motivation)
    {
        try {
            \DB::beginTransaction();
            abonne::find($id)->delete();
            \DB::commit(); 
            return redirect("/abonne_liste");
         } catch (\Throwable $th) {
            dd($th);
            return back();
         }   
    }
}
