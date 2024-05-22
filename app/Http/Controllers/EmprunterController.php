<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmprunterController extends Controller
{
    function emprunter()  {
        $etudiants=Etudiant::all();
        $livres=Livre::all();
return view('emprunts.create',compact('livres','etudiants'));
    }

    function borrow(Request $request)  {
        $etudiant=Etudiant::find($request->etudiant_id);
        $livre=Livre::find($request->livre_id);
$etudiant->livres()->attach($livre->id,['date_emprunt' => now(),'date_retour'=>null]);
return redirect()->route('livres.index');



    }
}
