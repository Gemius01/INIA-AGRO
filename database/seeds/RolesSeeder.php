<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' 	=> 'all-access'
        ]);
        Role::create([
            'name'      => 'Editor',
            'slug'      => 'editor',
        ]);
        Role::create([
            'name'      => 'Colaborador',
            'slug'      => 'colaborador',
        ]);
        Role::create([
            'name'      => 'Encargado Regional',
            'slug'      => 'encargado',
        ]);
    }
}
