<?php

use Illuminate\Database\Seeder;

class EditorPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => 17,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 16,
            'role_id' => 2,
        ]);
    }
}
