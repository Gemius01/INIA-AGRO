<?php

use Illuminate\Database\Seeder;
use App\Rubro;

class RubrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Rubro::create([
       		'name' => 'Rubro 1'
       ]);
       Rubro::create([
       		'name' => 'Rubro 2'
       ]);
       Rubro::create([
       		'name' => 'Rubro 3'
       ]);  
       Rubro::create([
       		'name' => 'Rubro 4'
       ]); 
    }
}
