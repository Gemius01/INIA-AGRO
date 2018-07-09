<?php

use Illuminate\Database\Seeder;
use App\Macrozona;

class MacrozonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Macrozona::create([
       		'name' => 'Macrozona 1',
       		'rubro_id' => 1,
       	]);
       	Macrozona::create([
       		'name' => 'Macrozona 2',
       		'rubro_id' => 1,
       	]);
       	Macrozona::create([
       		'name' => 'Macrozona 3',
       		'rubro_id' => 1,
       	]);
    }
}
