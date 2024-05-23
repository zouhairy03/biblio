<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    /**
     * affiche le form de creation d'un emprunt : associe un livre a un etudiant
     */
   public  function create()
    {
        $etudiants = Etudiant::all();
        $livres = Livre::all();
        return view('emprunts.create', compact('etudiants', 'livres'));
    }
    /**
     * store dans la table emprunts
     * // de creation d'un emprunt : associe un livre a un etudiant
     */
    public function store(Request $request)
    {

        $etudiant=Etudiant::find($request->etudiant_id);
        // $livre->etudiants()->attach($request->etudiant_id);
$etudiant->livres()->attach($request->livre_id,['date_emprunt'=>now(),'date_retour'=>null]);
return redirect()->route('etudiants.show',$etudiant->id);
}
}
