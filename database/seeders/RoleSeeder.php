<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $adminRole = Role::create([
            "name" => Role::ADMIN, "guard_name" => "web",
        ]);

        Role::create([
            "name" => Role::COMPTABLE, "guard_name" => "web",
        ]);

        Role::create([
            "name" => Role::PROFESSEUR, "guard_name" => "web",
        ]);

        Role::create([
            "name" => Role::ETUDIANT, "guard_name" => "web",
        ]);

         // Récupérer toutes les permissions
         $permissions = Permission::all();

         // Assigner toutes les permissions au rôle ADMIN
         $adminRole->syncPermissions($permissions);

    }
}
