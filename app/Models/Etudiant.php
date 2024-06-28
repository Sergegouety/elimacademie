<?php

namespace App\Models;

use id;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Etudiant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'date_naissance',
        'lieu_naissance',
        'ville_id',
        'nationalite',
        'adresse',
        'code_postal',
        'telephone_parent',
        'numero_parent',
        'niveau_etude_id',
        'diplome_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'etudiant_formation', 'etudiant_id', 'formation_id');
    }
    
    // Accessor for the 'formation' attribute
    public function getFormationAttribute($value): HasOne
    {
        if($value == 1){$formation = 'HOTESSE DE L\'AIR ET STEWARD CCA IATA';}
        if($value == 2){$formation = 'AGENT DE FRET';}
        if($value == 3){$formation = 'AGENT D\'ESCALE';}
        if($value == 4){$formation = 'AGENT DE BILLETTERIE DU TOURISME ET DE L\'HOTELLERIE';}
        if($value == 5){$formation = '';}
        
        return $formation;
    }

    // Accessor for the 'genre' attribute
    public function getGenreAttribute($value)
    {
        return $value == 1 ? 'Homme' : 'Femme';
    }
    

}
