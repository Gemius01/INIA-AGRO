<?php

use Illuminate\Database\Seeder;
use App\Mes;

class MesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mes::create([
        	'nombre' => 'Enero',
        	'inicio' => '01-01',
        	'fin'    => '01-31'
        ]);

        Mes::create([
        	'nombre' => 'Febrero',
        	'inicio' => '2-01',
        	'fin'    => '2-28'
        ]);

        Mes::create([
        	'nombre' => 'Marzo',
        	'inicio' => '3-01',
        	'fin'    => '3-31'
        ]);

        Mes::create([
        	'nombre' => 'Abril',
        	'inicio' => '4-01',
        	'fin'    => '4-30'
        ]);

        Mes::create([
        	'nombre' => 'Mayo',
        	'inicio' => '5-01',
        	'fin'    => '5-31'
        ]);

        Mes::create([
        	'nombre' => 'Junio',
        	'inicio' => '6-01',
        	'fin'    => '6-30'
        ]);

        Mes::create([
        	'nombre' => 'Julio',
        	'inicio' => '7-01',
        	'fin'    => '7-31'
        ]);

        Mes::create([
        	'nombre' => 'Agosto',
        	'inicio' => '8-01',
        	'fin'    => '28-31'
        ]);

        Mes::create([
        	'nombre' => 'Septiembre',
        	'inicio' => '9-01',
        	'fin'    => '9-30'
        ]);

         Mes::create([
        	'nombre' => 'Octubre',
        	'inicio' => '10-01',
        	'fin'    => '10-31'
        ]);

        Mes::create([
        	'nombre' => 'Noviembre',
        	'inicio' => '11-01',
        	'fin'    => '11-30'
        ]);

        Mes::create([
        	'nombre' => 'Diciembre',
        	'inicio' => '12-01',
        	'fin'    => '12-31'
        ]);
    }
}
