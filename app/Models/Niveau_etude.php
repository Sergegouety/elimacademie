<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Niveau_etude extends Model
{
    use HasFactory, SoftDeletes;
    // Nom de la table
    protected $table = 'niveau_etude';
}
