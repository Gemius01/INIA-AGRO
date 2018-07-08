<?php

use Illuminate\Database\Seeder;
use App\Seccion;

class SeccionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccion::create([
       		'name' => 'Portada'
       ]);
       Seccion::create([
       		'name' => 'Introducción'
       ]);
       Seccion::create([
       		'name' => 'Componente Meteorológico'
       ]);  
       Seccion::create([
       		'name' => 'Componente Hidrológico'
       ]); 
       Seccion::create([
       		'name' => 'Análisis de Posibles Riesgos Agroclimáticos en los Principales Rubros Agrícolas'
       ]);  
       Seccion::create([
       		'name' => 'Disponibilidad de Agua'
       ]);
       Seccion::create([
       		'name' => 'Análisis Del Indice De Vegetación Normalizado (NDVI)'
       ]);
       Seccion::create([
       		'name' => 'Indice De Condición De La Vegetación (VCI) (En Evaluación)'
       ]);
       Seccion::create([
       		'name' => 'Análisis Del Índice De Vegetación Ajustado al Suelo (SAVI)'
       ]);
    }
}
