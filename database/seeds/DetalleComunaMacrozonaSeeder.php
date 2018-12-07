<?php

use Illuminate\Database\Seeder;

class DetalleComunaMacrozonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuna_macrozona')->insert([
            'comuna_id' => 18, //San pedro de atacama
            'macrozona_id' => 2, 
        ]);

        DB::table('comuna_macrozona')->insert([
            'comuna_id' => 18, //San pedro de atacama
            'macrozona_id' => 2, 
        ]);

        DB::table('comuna_macrozona')->insert([
            'comuna_id' => 18, //San pedro de atacama
            'macrozona_id' => 2, 
        ]);

        DB::table('comuna_macrozona')->insert([
            'comuna_id' => 18, //San pedro de atacama
            'macrozona_id' => 2, 
        ]);

        DB::table('comuna_macrozona')->insert([
            'comuna_id' => 18, //San pedro de atacama
            'macrozona_id' => 2, 
        ]);
    }
}
