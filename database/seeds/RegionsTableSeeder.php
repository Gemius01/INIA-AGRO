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
            'numero' => 0,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Arica y Parinacota',
            'numero' => 15,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Tarapacá',
            'numero' => 1,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Antofagasta',
            'numero' => 2,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Atacama',
            'numero' => 3,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Coquimbo',
            'numero' => 4,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Valparaíso',
            'numero' => 5,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => "O'Higgins",
            'numero' => 6,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Maule',
            'numero' => 7,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Bío Bío',
            'numero' => 8,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Ñuble',
            'numero' => 16,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Araucanía',
            'numero' => 9,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Los Lagos',
            'numero' => 10,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Aysén',
            'numero' => 11,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Magallanes',
            'numero' => 12,
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Metropolitana',
            'numero' => 'RM',
        	'country_id' => 1,
        ]);
        Region::create([
        	'name' => 'Los Rios',
            'numero' => 14,
        	'country_id' => 1,
        ]);
    }
}
