<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filiere extends Model
{

    use HasFactory;
    protected $fillable = ["nom"];
   /**
    * Get all of the etudiants for the filiere
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function etudiants(): HasMany
   {
       return $this->hasMany(Etudiant::class);
   }
}
