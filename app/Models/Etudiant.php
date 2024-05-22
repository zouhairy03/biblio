<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nomprenom','filiere_id'];

/**
 * Get the filiere that owns the Etudiant
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function filiere(): BelongsTo
{
    return $this->belongsTo(Filiere::class);
}
/**
 * The livres that belong to the Etudiant
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function livres(): BelongsToMany
{
    return $this->belongsToMany(Livre::class, 'emprunts')->withPivot('date_emprunt','date_retour')->withTimestamps();
}
function getLivireEnCoursEmprunt() {

}
}
