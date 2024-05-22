<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;
    protected $fillable = ['date_emprunt','date_retour','livre_id','etudiant_id'];

//fonction emprunter un livre par un etudiant
public function emprunter($livre,$etudiant){
if($this->isAvailable($livre))
$etudiant->livres()->attach($livre);
}
//fonction verifier si livre est disponible
public function isAvailable($livre){

    return $livre->emprunts()->where('date_retour',null)->count() == 0;
}


}
