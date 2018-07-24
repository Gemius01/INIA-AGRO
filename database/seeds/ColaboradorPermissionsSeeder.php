<?php

use Illuminate\Database\Seeder;

class ColaboradorPermissionsSeeder extends Seeder
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
            'role_id' => 3,
        ]);
    }
}
