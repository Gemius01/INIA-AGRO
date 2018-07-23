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
      //  Arica y Parinacota
       Rubro::create([
          'name' => 'Cultivos',
          'subrubro' => 'Maíz choclero'
       ]);
       Rubro::create([
          'name' => 'Praderas'
       ]);
       Rubro::create([
          'name' => 'Hortalizas'
       ]);
       Rubro::create([
          'name' => 'Frutales',
          'subrubro' => 'Olivo'
       ]);
       //Tarapaca
       //Antofagasta
       Rubro::create([
          'name' => 'Frutales'
       ]);
       // Atacama
       Rubro::create([
          'name' => 'Ganadería'
       ]);
       Rubro::create([
          'name' => 'Frutales',
          'subrubro' => 'Uva de mesa'
       ]);
       //Coquimbo
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Nogal'
       ]);
       //Valparaiso
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Palto'
       ]);
       Rubro::create([
         'name' => 'Hortalizas',
         'subrubro' => 'Tomate'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Vides'
       ]);
       //Metropolitana
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Maíz'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Papas'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Carozos'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Parrones'
       ]);
       Rubro::create([
         'name' => 'Apicultura'
       ]);
       //O'Higgins
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Avena'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Cebada'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Quínoa'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Pomáceas'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Viñas'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Trigo'
       ]);
       //Maule
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Arroz'
       ]);
       Rubro::create([
         'name' => 'Frutales Menores'
       ]);
       //Biobío
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Canola'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Leguminosas'
       ]);
       //Araucanía
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Lupino'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Raps'
       ]);
       Rubro::create([
         'name' => 'Cultivos',
         'subrubro' => 'Trigo y Tritricale'
       ]);
       Rubro::create([
         'name' => 'Flores'
       ]);
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Avellano Europeo'
       ]);
       //Los Ríos
       //Los Lagos
       //Aysen
       Rubro::create([
         'name' => 'Frutales',
         'subrubro' => 'Cerezo'
       ]);
       //Magallanes
       


    }
}