<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant_formation extends Model
{
    use HasFactory, SoftDeletes;
    // Nom de la table
    protected $table = 'etudiant_formation';

    protected $fillable = [
        'etudiant_id',
        'formation_id',
    ];
}
