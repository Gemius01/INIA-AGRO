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
      //  Arica y Parinacota
        Macrozona::create([
          'name' => 'Tundra',
          'region_id' => 2,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Desértico frío',
          'region_id' => 2, 
          'rubro_id' => 1 //Cultivos Maiz Choclero
        ]);
        Macrozona::create([
          'name' => 'Desértico frío',
          'region_id' => 2,
          'rubro_id' => 2 //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Desértico normal',
          'region_id' => 2,
          'rubro_id' => 1 //Cultivos Maiz Choclero
        ]);
        Macrozona::create([
          'name' => 'Desértico normal',
          'region_id' => 2,
          'rubro_id' => 2 //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Desértico normal',
          'region_id' => 2,
          'rubro_id' => 3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Desértico cálido con nublados abundantes',
          'region_id' => 2,
          'rubro_id' => 1 //Cultivos Maiz Choclero
        ]);
        Macrozona::create([
          'name' => 'Desértico cálido con nublados abundantes',
          'region_id' => 2,
          'rubro_id' =>  3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Desértico cálido con nublados abundantes',
          'region_id' => 2,
          'rubro_id' =>  4 //Frutales Olivo
        ]);
        //Tarapaca
          //NO TIENE NIGUNA MACROZONA
        //Antofagasta
        Macrozona::create([
          'name' => 'Alto Loa',
          'region_id' => 4,
          'rubro_id' =>  1 //Cultivos Maiz Choclero
        ]);
        Macrozona::create([
          'name' => 'Alto Loa',
          'region_id' => 4,
          'rubro_id' =>  5, //Frutales Null
        ]);
        Macrozona::create([
          'name' => 'Alto Loa',
          'region_id' => 4,
          'rubro_id' =>  3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Alto Loa',
          'region_id' => 4,
          'rubro_id' =>  2 //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Atacama La Grande',
          'region_id' => 4,
          'rubro_id' =>  1 //Cultivos Maiz Choclero
        ]);
        Macrozona::create([
          'name' => 'Atacama La Grande',
          'region_id' => 4,
          'rubro_id' =>  5, //Frutales Null
        ]);
        Macrozona::create([
          'name' => 'Atacama La Grande',
          'region_id' => 4,
          'rubro_id' =>  3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Atacama La Grande',
          'region_id' => 4,
          'rubro_id' =>  2 //Praderas Null
        ]);
        // Atacama
        Macrozona::create([
          'name' => 'Secano Norte Chico',
          'region_id' => 5,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Valle Copiapó',
          'region_id' => 5,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Valle Copiapó',
          'region_id' => 5,
          'rubro_id' =>  3 //Hortalizas Null
        ]);Macrozona::create([
          'name' => 'Valle Copiapó',
          'region_id' => 5,
          'rubro_id' =>  6 //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Valle Huasco',
          'region_id' => 5,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Valle Huasco',
          'region_id' => 5,
          'rubro_id' =>  3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Huasco',
          'region_id' => 5,
          'rubro_id' =>  6 //Ganadería Null 
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 5,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 5,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 5,
          'rubro_id' =>  7, //Frutales Uva de Mesa
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 5,
          'rubro_id' =>  6 //Ganadería Null 
        ]);
        //Coquimbo
        Macrozona::create([
          'name' => 'Secano Norte Chico',
          'region_id' => 6,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Secano Norte Chico',
          'region_id' => 6,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Secano Norte Chico',
          'region_id' => 6,
          'rubro_id' =>  7, //Frutales Uva de Mesa
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 6,
          'rubro_id' =>  3 //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 6,
          'rubro_id' =>  6 //Ganadería Null 
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 6,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 6,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 6,
          'rubro_id' =>  7, //Frutales Uva de Mesa
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 6,
          'rubro_id' =>  2 //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Cordillera',
          'region_id' => 6,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Cordillera',
          'region_id' => 6,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Cordillera',
          'region_id' => 6,
          'rubro_id' =>  7, //Frutales Uva de Mesa
        ]);
        //Valparaiso
        Macrozona::create([
          'name' => 'Estepa Semiárida con Influencia Marina',
          'region_id' => 7,
          'rubro_id' =>  9, //Frutales Palto
        ]);
        Macrozona::create([
          'name' => 'Estepa Semiárida Costera con Influencia Marina ',
          'region_id' => 7,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Estepa Semiárida Seca en Valle Central Interior',
          'region_id' => 7,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo con Infuencia Marina en Valle Central',
          'region_id' => 7,
          'rubro_id' =>  9, //Frutales Palto
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo con Infuencia Marina en Valle Central',
          'region_id' => 7,
          'rubro_id' =>  10, //Hortalizas Tomate
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo Costero Inferior',
          'region_id' => 7,
          'rubro_id' =>  9, //Frutales Palto 
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo Costero Inferior',
          'region_id' => 7,
          'rubro_id' => 11, //Frutales Vides
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo Costero Superior',
          'region_id' => 7,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo en Precordillera Andina',
          'region_id' => 7,
          'rubro_id' => null
        ]);
        Macrozona::create([
          'name' => 'Templado Mediterráneo en Valle Central Interior',
          'region_id' => 7,
          'rubro_id' => 11, //Frutales Vides
        ]);
        //Metropolitana
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>  12, //Cultivos Maiz
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>  14, //Frutales Carozos
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>  15, //Frutales Parrones
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>   8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Transversal',
          'region_id' => 16,
          'rubro_id' =>  16, //Apicultura Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 16,
          'rubro_id' =>  16, //Apicultura Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 16,
          'rubro_id' =>  16, //Apicultura Null
        ]);
        //O'Higgins
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  17, //Cultivos Avena
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  18, //Cultivos Cebada
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  12, //Cultivo Maiz
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' => 19, //Cultivos Quínoa
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 8,
          'rubro_id' =>  2, //Pradera Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' => 14, //Frutales Carozos
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' => 20, //Frutales Pomáceas
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' => 21, //Frutales Viñas
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  17, //Cultivos Avena
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  18, //Cultivos Cebada
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' => 12, //Cultivos Maiz
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  19, //Cultivos Quínoa
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  22, //Cultivos Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  3, // Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 8,
          'rubro_id' =>  16, //Apicultura Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' => 14, //Frutales Carozos
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' => 20, //Frutales Pomáceas
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' => 21, //Frutales Viñas
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' => 17 //Cultivos Avena
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  18, //Cultivos Cebada
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  12, //Cultivos Maiz
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  19, //Cultivos Quínoa
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' => 22, //Cultivos Trigo
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 8,
          'rubro_id' =>  16, //Apicultura Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 8,
          'rubro_id' =>  14, //Frutales Carozos
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 8,
          'rubro_id' =>  4, //Frutales Olivo
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 8,
          'rubro_id' => 20, //Frutales Pomáceas
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 8,
          'rubro_id' => 21, //Frutales Viña
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 8,
          'rubro_id' =>  8, //Frutales Nogal
        ]);
        //Maule
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 9,
          'rubro_id' => 22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 9,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 9,
          'rubro_id' => 22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 9,
          'rubro_id' => 11, //Frutales Vides
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 9,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 9,
          'rubro_id' =>  6, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' => 23, //Cultivos Arroz
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' => 22, //Cultivos Trigo
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' => 24, //Frutales Menos
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 9,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 9,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        //Biobío
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 10,
          'rubro_id' =>  25, //Cultivo Canola
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 10,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 10,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 10,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 10,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 10,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 10,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  23, //Cultivo Arroz
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  25, //Cultivos Canola
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  24, //Frutales Menores
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 10,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 10,
          'rubro_id' =>  25, //Cultivos Canola
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 10,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 10,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 10,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 10,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 10,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 10,
          'rubro_id' =>   2, //Praderas Null
        ]);
        //Araucanía
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  17, //Cultivo Avena
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  27, //Cultivo Lupino
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  28, //Cultivo Raps
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  29, //Cultivo Trigo y Tritricale
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  30, //Flores Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 12,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  17, //Cultivos Avena
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  27, //Cultivo Lupino
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  28, //Cultivo Raps
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  29, //Cultivos Trigo y Tritricale
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  30, //Flores Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  31, //Frutales Avellano Europeo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 12,
          'rubro_id' =>  2, //Praderas Nulls
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  17, //Cultivo Avena
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  27, //Cultivo Lupino
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  13, //Cultivo Papas
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  28, //Cultivo Raps
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  29, //Cultivos Trigo y Tritricale
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  30, //Flores Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  31, //Frutales Avellano Europeo
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 12,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  17, //Cultivo avena
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  27, //Cultivos Lupino
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  13, //Cultivo Papas
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  28, //Cultivo Raps
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  29, //Cultivo Trigo y Tritricale
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  30, //Flores Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>  31, //Frutales Avellano Europeo
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 12,
          'rubro_id' =>   2,// Praderas Null
        ]);
        
        //Los Ríos
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 17,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 17,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 17,
          'rubro_id' =>   2, //Praderas Null
        ]); 
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 17,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 17,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 17,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 17,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 17,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 17,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 17,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 17,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        //Los Lagos
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 13,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas  
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 13,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas  
        ]);
        Macrozona::create([
          'name' => 'Isla de Chiloé',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Isla de Chiloé',
          'region_id' => 13,
          'rubro_id' =>   3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Isla de Chiloé',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Isla de Chiloé',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas  
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 13,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Valle Secano',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas 
        ]);
        Macrozona::create([
          'name' => 'Ñadis',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Ñadis',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Ñadis',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas 
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 13,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 13,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 13,
          'rubro_id' =>  13, //Cultivos Papas  
        ]);
        //Aysen
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 14,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 14,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Zona Intermedia',
          'region_id' => 14,
          'rubro_id' =>  13, //Cultivos Papas   
        ]);
        Macrozona::create([
          'name' => 'Zona Intermedia',
          'region_id' => 14,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona Intermedia',
          'region_id' => 14,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        Macrozona::create([
          'name' => 'Zona Intermedia',
          'region_id' => 14,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Estepa',
          'region_id' => 14,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Estepa',
          'region_id' => 14,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Microclima',
          'region_id' => 14,
          'rubro_id' =>  13, //Cultivos Papas 
        ]);
        Macrozona::create([
          'name' => 'Zona de Microclima',
          'region_id' => 14,
          'rubro_id' =>  32, //Frutales Cerezo
        ]);
        Macrozona::create([
          'name' => 'Zona de Microclima',
          'region_id' => 14,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        //Magallanes
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 15,
          'rubro_id' =>  24, //Frutales Menores Null
        ]);
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 15,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 15,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        Macrozona::create([
          'name' => 'Zona Húmeda',
          'region_id' => 15,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Transición',
          'region_id' => 15,
          'rubro_id' =>  24, //Frutales Menores Null  
        ]);
        Macrozona::create([
          'name' => 'Zona de Transición',
          'region_id' => 15,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Transición',
          'region_id' => 15,
          'rubro_id' =>   3, //Hortalizas Null 
        ]);
        Macrozona::create([
          'name' => 'Zona de Transición',
          'region_id' => 15,
          'rubro_id' =>   2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Estepa',
          'region_id' => 15,
          'rubro_id' =>   6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Zona de Estepa',
          'region_id' => 15,
          'rubro_id' =>   2, //Praderas Null 
        ]);
        //Ñuble
         Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 11,
          'rubro_id' =>  25, //Cultivo Canola
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 11,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Secano Costero',
          'region_id' => 11,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 11,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 11,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 11,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Secano Interior',
          'region_id' => 11,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  23, //Cultivo Arroz
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  25, //Cultivos Canola
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  24, //Frutales Menores
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Depresión Intermedia',
          'region_id' => 11,
          'rubro_id' =>  2, //Praderas Null
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 11,
          'rubro_id' =>  25, //Cultivos Canola
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 11,
          'rubro_id' =>  26, //Cultivo Leguminosas
        ]);
        Macrozona::create([
          'name' => 'Precordillera',
          'region_id' => 11,
          'rubro_id' =>  22, //Cultivo Trigo
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 11,
          'rubro_id' =>  13, //Cultivos Papas
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 11,
          'rubro_id' =>  6, //Ganadería Null
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 11,
          'rubro_id' =>  3, //Hortalizas Null
        ]);
        Macrozona::create([
          'name' => 'Provincia de Arauco',
          'region_id' => 11,
          'rubro_id' =>   2, //Praderas Null
        ]);
    }
}
