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


}
