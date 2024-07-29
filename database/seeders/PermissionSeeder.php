<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            "name" => Permission::VOIR_MENU_UTILISATEUR,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::VOIR_PAGE_UTILISATEUR,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::AJOUTER_UTILISATEUR,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::MODIFIER_UTILISATEUR,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::VOIR_PAGE_ROLE,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::AJOUTER_ROLE,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::MODIFIER_ROLE,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::VOIR_PAGE_PERMISSION,
            "guard_name" => "web",
        ]);

        Permission::create([
            "name" => Permission::AJOUTER_PERMISSION,
            "guard_name" => "web",
        ]);

       
    }
}
