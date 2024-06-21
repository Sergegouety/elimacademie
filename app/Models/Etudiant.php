<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

}
