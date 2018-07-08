<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();

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
