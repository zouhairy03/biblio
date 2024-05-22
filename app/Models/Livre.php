<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'prix'];

    /**
     * The etudiants that belong to the Livre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function etudiants(): BelongsToMany
    {
        return $this->belongsToMany(Etudiant::class, 'emprunts')->withPivot('date_emprunt', 'date_retour')->withTimestamps();;
    }

    public function estDispo()
    {
        $etudiants= $this->etudiants()->where('date_retour',null)->get();
        return $etudiants->isEmpty();
    }
    public function emprunter($etudiant)
    {
        if ($this->estDispo())
            return $this->etudiants()->attach($etudiant, ['date_emprunt' => now()]);
        return false;
    }
    public function rendre($etudiant)
    {
        $e =   Emprunt::where('livre_id', $this->id)->where('etudiant_id', $etudiant->id)->where('date_retour', null)->first();
    if($e)    $e->updateExistingPivot('date_retour', now());
    else return false;
    }

}
