<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nom' => 'ELIM',
            'prenoms' => 'Academie Admin',
            'email' => 'admin@elimademie.com',
            'password' => bcrypt('@Elimacademie'),
            'telephone' => '0707070707',
            'sexe_id' => 1,
            'first_login' => 0
        ]);
        
        $role = Role::firstWhere('name', 'admin');

        $user->assignRole($role->name);

        $permissions = Permission::all();
        $role->syncPermissions($permissions);

    }
}
