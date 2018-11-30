<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	//Permisos 

        Permission::create([
        	'name' => 'Navegar Usuarios',
        	'slug' => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver Detalle de usuarios',
        	'slug' => 'users.show',
        	'description' => 'Ver detalle en un usuario',
        ]);
        Permission::create([
        	'name' => 'Editar Usuario',
        	'slug' => 'users.edit',
        	'description' => 'Editar Cualquier usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar Usuarios',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar Cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver Detalle de rol',
        	'slug' => 'roles.show',
        	'description' => 'Ver detalle en un rol',
        ]);
        Permission::create([
        	'name' => 'Creacion de rol',
        	'slug' => 'roles.create',
        	'description' => 'Crear rol en el sistema',
        ]);
        Permission::create([
        	'name' => 'Editar rol',
        	'slug' => 'roles.edit',
        	'description' => 'Editar Cualquier rol del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar Cualquier rol del sistema',
        ]);

        //Products
        Permission::create([
        	'name' => 'Navegar productos',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver Detalle de producto',
        	'slug' => 'products.show',
        	'description' => 'Ver detalle en un producto',
        ]);
        Permission::create([
        	'name' => 'Creacion productos',
        	'slug' => 'products.create',
        	'description' => 'Crear producto en el sistema',
        ]);
        Permission::create([
        	'name' => 'Editar producto',
        	'slug' => 'products.edit',
        	'description' => 'Editar Cualquier producto del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar producto',
        	'slug' => 'products.destroy',
        	'description' => 'Eliminar Cualquier producto del sistema',
        ]);

        Permission::create([
            'name' => 'Ver Boletines',
            'slug' => 'boletines.index',
            'description' => 'Ver boletines del sistema',
        ]);

        //Permisos para acceder al Boletín
        Permission::create([
            'name' => 'Ver Boletin en detalle',
            'slug' => 'boletines.show',
            'description' => 'Lista las secciones del boletin clickeado',
        ]);

         //Permission para acceder al resumen nacional
        Permission::create([
            'name' => 'Ver Resumen Nacional en detalle',
            'slug' => 'resumen.show',
            'description' => 'Ver las secciones del Resumen nacional al clickearlo',
        ]);

        //Permiso para ver mis colaboradores
        Permission::create([
            'name' => 'Ver mis colaboradores',
            'slug' => 'colaboradores.index',
            'description' => 'Ver mis colaboradores y enviar correos',
        ]);
        
    }
}
