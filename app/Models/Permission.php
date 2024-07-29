<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
        'statut'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'string'
    ];

    // User permissions
    const VOIR_MENU_UTILISATEUR = "voir menu utilisateur";
    const VOIR_PAGE_UTILISATEUR = "voir page utilisateur";
    const AJOUTER_UTILISATEUR = "ajouter utilisateur";
    const MODIFIER_UTILISATEUR = "modifier utilisateur";

    // Role permissions
    const VOIR_PAGE_ROLE = "voir page role";
    const AJOUTER_ROLE = "ajouter role";
    const MODIFIER_ROLE = "modifier role";

    // Permission permissions
    const VOIR_PAGE_PERMISSION = "voir page permission";
    const AJOUTER_PERMISSION = 'ajouter permission';
}
