<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(RootUserSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(SeccionsTableSeeder::class);
        $this->call(RubrosTableSeeder::class);
        $this->call(MacrozonasTableSeeder::class);
        $this->call(ColaboradorPermissionsSeeder::class);
        $this->call(EditorPermissionsSeeder::class);
        $this->call(EncargadoPermissionsSeeder::class);
        $this->call(EleccionTableSeeder::class);
        $this->call(MesTableSeeder::class);
        $this->call(ContadorVisitasSeeder::class);
    }
}
