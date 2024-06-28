<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
    ];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_formation', 'formation_id', 'etudiant_id');
    }
}
