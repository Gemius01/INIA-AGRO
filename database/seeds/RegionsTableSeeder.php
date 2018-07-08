<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
        	'name' => 'Nacional',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Arica y Parinacota',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Tarapacá',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Antofagasta',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Atacama',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Coquimbo',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Valparaíso',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => "O'Higgins",
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Maule',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Bío Bío',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Ñuble',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Araucanía',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Los Lagos',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Aysén',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Magallanes',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Metropolitana',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Los Rios',
        	'country_id' => 1,
        ]);
    }
}
