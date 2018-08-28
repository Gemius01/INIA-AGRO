<?php

use Illuminate\Database\Seeder;
use App\Visita;
class ContadorVisitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visita::create([
        	'contador' => 0
        ]);

        Visita::create([
            'contador' => 0
        ]);
    }
}
