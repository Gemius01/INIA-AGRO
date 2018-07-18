<?php

use Illuminate\Database\Seeder;
use App\Eleccion;

class EleccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eleccion::create([
        	'publicacion_id' => null,
        ]);
    }
}
