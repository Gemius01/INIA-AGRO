<?php

use Illuminate\Database\Seeder;

class EncargadoPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => 16,
            'role_id' => 4,
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => 18,
            'role_id' => 4,
        ]);
    }
}
