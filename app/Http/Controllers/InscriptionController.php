<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;
use App\Models\Diplome;
use App\Models\Niveau_etude;
use App\Models\User;
use App\Models\Formation;

class InscriptionController extends Controller
{
     // Exemple de méthode pour afficher la page d'inscription
     public function index()
     {
         $diplomes = Diplome::all();
         $communes = Commune::all();
         $niveau_etude = Niveau_etude::all();
         $formations = Formation::all();

         return view('frontoffice.inscription.index',compact('diplomes','niveau_etude','communes','formations'));
     }

     public function confirm()
     {
         return view('frontoffice.inscription.confirm');
     }
}
