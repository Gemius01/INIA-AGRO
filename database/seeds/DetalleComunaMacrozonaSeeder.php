<?php

use Illuminate\Database\Seeder;
use App\Comuna;

class DetalleComunaMacrozonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //San pedro de atacama
        $comuna = Comuna::find(18);
        $comuna->macrozonas()->sync([10,11,12,13,14,15,16,17]); //Alto Loa, Atacama la grande

        //Sierra Gorda
        $comuna = Comuna::find(14);
        $comuna->macrozonas()->sync([14,15,16,17]); //Atacama la grande

        //Antofagasta
        $comuna = Comuna::find(12);
        $comuna->macrozonas()->sync([14,15,16,17]); //Atacama la grande

        //Taltal
        $comuna = Comuna::find(15);
        $comuna->macrozonas()->sync([26,27,28]); //Precordillera

        //Maria Elena
        $comuna = Comuna::find(20);
        $comuna->macrozonas()->sync([10,11,12,13]); //Alto Loa

        //Calama
        $comuna = Comuna::find(16);
        $comuna->macrozonas()->sync([10,11,12,13,14,15,16,17]); //Alto Loa, Atacama la grande

        //Ollague
        $comuna = Comuna::find(17);
        $comuna->macrozonas()->sync([10,11,12,13]); //Alto Loa

        //Chañaral
        $comuna = Comuna::find(24);
        $comuna->macrozonas()->sync([26,27,28]); //Precordillera

        //Diego de Almagro
        $comuna = Comuna::find(25);
        $comuna->macrozonas()->sync([26,27,28]); //Precordillera

        //Caldera
        $comuna = Comuna::find(22);
        $comuna->macrozonas()->sync([19,20,21]); //Precordillera

        //Copiapó
        $comuna = Comuna::find(21);
        $comuna->macrozonas()->sync([19,20,21,25,26,27,28]); //Precordillera, Secano Costero, Valle copiapó

        //Tierra amarilla
        $comuna = Comuna::find(23);
        $comuna->macrozonas()->sync([19,20,21]); //Precordillera

        //Alto del Carmen
        $comuna = Comuna::find(27);
        $comuna->macrozonas()->sync([19,20,21,26,27,28,29,30,31,38,39,49]); //Cordillera, Secano norte Chico, Precordillera

        //Freirina
        $comuna = Comuna::find(28);
        $comuna->macrozonas()->sync([33,25,22,23,24,18]); //Secano Costero, Valle Huasco, Secano norte Chico

        //Vallenar
        $comuna = Comuna::find(26);
        $comuna->macrozonas()->sync([33,29,30,31,34,35,36,37,25,22,23,24,18]); //Secano Costero, Secano norte Chico, Precordillera,Valle huasco

        //Huasco
        $comuna = Comuna::find(29);
        $comuna->macrozonas()->sync([25,22,23,24,18]);//Secano costero, Valle huasco, Secano norte chico

        //La serena
        $comuna = Comuna::find(30);
        $comuna->macrozonas()->sync([32,29,30,31]);//VAlle transversal, Secano norte chico

        //La Higuera
        $comuna = Comuna::find(33);
        $comuna->macrozonas()->sync([38,39,40,25,26,27,29,30,31,33,34,35,36,37,18]);//Cordillera, Precordillera, Secano Costero
        
        //Vicuña
        $comuna = Comuna::find(35);
        $comuna->macrozonas()->sync([26,27,28,32,29,30,31,38,39,40]);//Precordillera, Valle Tansversal, Secano Norte Chico

        //Coquimbo
        $comuna = Comuna::find(31);
        $comuna->macrozonas()->sync([33,32,29,30,31]);//Secano Costero,VAlle Transversal, Secano Norte Chico

        //Andacollo
        $comuna = Comuna::find(32);
        $comuna->macrozonas()->sync([29,30,31]);// Secano Norte Chico

        //Río Hurtado
        $comuna = Comuna::find(44);
        $comuna->macrozonas()->sync([38,39,40,34,35,36,37,29,30,31]); //Cordillera, Precordillera, Secano Norte Chico

        //Paihuano
        $comuna = Comuna::find(34);
        $comuna->macrozonas()->sync([38,39,40,34,35,36,37,29,30,31]); //Cordillera, Precordillera, Secano Norte Chico

        //Combarbala
        $comuna = Comuna::find(41);
        $comuna->macrozonas()->sync([38,39,40,34,35,36,37,29,30,31]); //Cordillera, Precordillera, Secano Norte Chico

        //Monte Patria
        $comuna = Comuna::find(42);
        $comuna->macrozonas()->sync([34,35,36,37,33,32,29,30,31]); //Precordillera, Secano costero, VAlle Transversal,Secano Norte Chico

        //Punitaqui
        $comuna = Comuna::find(43);
        $comuna->macrozonas()->sync([33,29,30,31]); //Secano costero, Secano norte chico

        //Los vilos
        $comuna = Comuna::find(38);
        $comuna->macrozonas()->sync([33,29,30,31,41,42,43]); // Secano costero, secano costero chico, Estepas

        //Canela
        $comuna = Comuna::find(37);
        $comuna->macrozonas()->sync([33,29,30,31]); //Secano costero, Secano norte chico

        //Salamanca
        $comuna = Comuna::find(39);
        $comuna->macrozonas()->sync([38,39,40,34,35,36,37,29,30,31,43,49]); //Secano costero, Secano norte chico,  estepas

        //La ligua
        $comuna = Comuna::find(57);
        $comuna->macrozonas()->sync([33,29,30,31,41,42,43,48,44,45]); //Secano costero, norte chico, 3 estepas, templados

        //Petorca
        $comuna = Comuna::find(60);
        $comuna->macrozonas()->sync([38,39,40,29,30,31,41,43,49]); //Secano costero, norte chico, Estepa influencia marina, valle central, 
        
         //Cabildo
         $comuna = Comuna::find(58);
         $comuna->macrozonas()->sync([38,39,40,41,43,50,49,44,45]); //cordillera, estepas, templados

         //Catemu
         $comuna = Comuna::find(74);
         $comuna->macrozonas()->sync([43,44,45,50]); //Estepa semiarida, templado

         //Nogales
         $comuna = Comuna::find(66);
         $comuna->macrozonas()->sync([41,43,50,44,45]); //Estepa semiarida, templado

         //Calera
         $comuna = Comuna::find(63);
         $comuna->macrozonas()->sync([44,45]); // templado

          //La Cruz
          $comuna = Comuna::find(65);
          $comuna->macrozonas()->sync([44,45]); //Estepa semiarida, templado

        //Quillota
        $comuna = Comuna::find(62);
        $comuna->macrozonas()->sync([44,45,48]); //Estepa semiarida, templado

        //Hijuelas
        $comuna = Comuna::find(64);
        $comuna->macrozonas()->sync([58,50,44,45]); 

        //Llaillay
        $comuna = Comuna::find(75);
        $comuna->macrozonas()->sync([58,50,44,45]);

        //Putaendo
        $comuna = Comuna::find(77);
        $comuna->macrozonas()->sync([38,39,40,43,50,49]);

        //San Esteban
        $comuna = Comuna::find(56);
        $comuna->macrozonas()->sync([50,49]);

        //Santa María
        $comuna = Comuna::find(78);
        $comuna->macrozonas()->sync([50,49]);
        
        //Santa María
        $comuna = Comuna::find(78);
        $comuna->macrozonas()->sync([50,49]);

        //San Felipe
        $comuna = Comuna::find(73);
        $comuna->macrozonas()->sync([50]);

        //Panquehue
        $comuna = Comuna::find(76);
        $comuna->macrozonas()->sync([50]);

        //Rinconada
        $comuna = Comuna::find(55);
        $comuna->macrozonas()->sync([58,51,52,53,54,55,56,57]);

        //Los Andes
        $comuna = Comuna::find(53);
        $comuna->macrozonas()->sync([59,51,52,53,54,55,56,57,49,50]);

        //Calle larga
        $comuna = Comuna::find(54);
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,49,50]);

        //Papudo
        $comuna = Comuna::find(59);
        $comuna->macrozonas()->sync([41,48]);

        //Zapallar
        $comuna = Comuna::find(61);
        $comuna->macrozonas()->sync([48,41]);

        //Puchuncaví
        $comuna = Comuna::find(49);
        $comuna->macrozonas()->sync([44,45,48]);

        //Quintero
        $comuna = Comuna::find(50);
        $comuna->macrozonas()->sync([44,45,48]);

        //ConCon
        $comuna = Comuna::find(47);
        $comuna->macrozonas()->sync([44,45,48]);

        //Villa Alemana
        $comuna = Comuna::find(47);
        $comuna->macrozonas()->sync([44,45]);

        //Viña Del Mar
        $comuna = Comuna::find(51);
        $comuna->macrozonas()->sync([44,45,48]);

        //Valparaíso
        $comuna = Comuna::find(51);
        $comuna->macrozonas()->sync([44,45,48]);

        //Quilpue
        $comuna = Comuna::find(79);
        $comuna->macrozonas()->sync([58,44,45]);

        //Algarrobo
        $comuna = Comuna::find(68);
        $comuna->macrozonas()->sync([58,44,45,46,47]);

        //El quisco
        $comuna = Comuna::find(70);
        $comuna->macrozonas()->sync([44,45,46,47]);

        //San antonio
        $comuna = Comuna::find(67);
        $comuna->macrozonas()->sync([58,51,52,53,54,55,56,57,46,47,44,45]);

        //Santo Domingo
        $comuna = Comuna::find(72);
        $comuna->macrozonas()->sync([58,60,61,62,63,64,65,66,46,47,44,45]);

        //Casa Blanca
        $comuna = Comuna::find(46);
        $comuna->macrozonas()->sync([58,51,52,53,54,55,56,57,46,47,44,45,48]);

        //Limache
        $comuna = Comuna::find(80);
        $comuna->macrozonas()->sync([44,45,48]);

        //Cartagena
        $comuna = Comuna::find(69);
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,46,47,44,45]);

        //El Tabo
        $comuna = Comuna::find(71);
        $comuna->macrozonas()->sync([44,45,46,47]);

        //El Tabo
        $comuna = Comuna::find(71);
        $comuna->macrozonas()->sync([44,45,46,47]);

        //Navidad
        $comuna = Comuna::find(104);
        $comuna->macrozonas()->sync([58,60,61,62,63,64,65,66,46,47,44,45]);

        //Litueche
        $comuna = Comuna::find(104);
        $comuna->macrozonas()->sync([58,67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66]);

        //Pichilemu
        $comuna = Comuna::find(100);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66]);

        //La estrella
        $comuna = Comuna::find(101);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,81,82,83,84,85,86,87,88,89,90,91,92]);
        
        //Marichihue
        $comuna = Comuna::find(103);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,81,82,83,84,85,86,87,88,89,90,91,92]);
        
        //Las Cabras
        $comuna = Comuna::find(89);
        $comuna->macrozonas()->sync([58,67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,81,82,83,84,85,86,87,88,89,90,91,92]);
    
        //Pichidegua
        $comuna = Comuna::find(95);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80]);

        //Peumo
        $comuna = Comuna::find(94);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //Coltauco
        $comuna = Comuna::find(86);
        $comuna->macrozonas()->sync([58,81,82,83,84,85,86,87,88,89,90,91,92]);

        //San Vicente
        $comuna = Comuna::find(99);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //Santa Cruz
        $comuna = Comuna::find(115);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Nancagua
        $comuna = Comuna::find(110);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //Palmilla
        $comuna = Comuna::find(111);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80]);

        //Peralillo
        $comuna = Comuna::find(112);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80]);

        //Paredones
        $comuna = Comuna::find(105);
        $comuna->macrozonas()->sync([60,61,62,63,64,65,66,98,99]);

        //Lolol
        $comuna = Comuna::find(109);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,98,99,100,101,102,103]);

        //Chepica
        $comuna = Comuna::find(107);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66,104,105,106,107,108,109,101,102,103]);
    
        //Chimbarongo
        $comuna = Comuna::find(108);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92,104,105,106,107,108,109]);

        //Placilla
        $comuna = Comuna::find(113);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //San Fernando
        $comuna = Comuna::find(106);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92,110]);

        //Quinta de Tilcoco
        $comuna = Comuna::find(96);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //Malloa
        $comuna = Comuna::find(91);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Rengo
        $comuna = Comuna::find(97);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Coinco
        $comuna = Comuna::find(85);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92]);

        //Requinoa
        $comuna = Comuna::find(98);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Olivar
        $comuna = Comuna::find(93);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Doñihue
        $comuna = Comuna::find(87);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Rancagua
        $comuna = Comuna::find(83);
        $comuna->macrozonas()->sync([58,93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Machali
        $comuna = Comuna::find(90);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Codegua
        $comuna = Comuna::find(84);
        $comuna->macrozonas()->sync([93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Graneros
        $comuna = Comuna::find(84);
        $comuna->macrozonas()->sync([58,93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Mostazal
        $comuna = Comuna::find(92);
        $comuna->macrozonas()->sync([58,59,93,94,95,96,97,51,52,53,54,55,56,57,81,82,83,84,85,86,87,88,89,90,91,92]);

        //Romeral
        $comuna = Comuna::find(134);
        $comuna->macrozonas()->sync([93,94,95,96,97,104,105,106,107,108,109]);

        //Sagrada Familia
        $comuna = Comuna::find(135);
        $comuna->macrozonas()->sync([104,105,106,107,108,109,100,101,102,103]);

        //Curicó
        $comuna = Comuna::find(129);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109,100,101,102,103]);

        //Teno
        $comuna = Comuna::find(136);
        $comuna->macrozonas()->sync([81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80,110,104,105,106,107,108,109,100,101,102,103]);
    
        //Rauco
        $comuna = Comuna::find(133);
        $comuna->macrozonas()->sync([67,68,69,70,71,72,73,74,75,76,77,78,79,80,104,105,106,107,108,109,100,101,102,103]);

        //Licanten
        $comuna = Comuna::find(131);
        $comuna->macrozonas()->sync([100,101,102,103,98,99]);

        //San clemente
        $comuna = Comuna::find(124);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109]);

        //Pelarco
        $comuna = Comuna::find(121);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109]);

        //San Rafael
        $comuna = Comuna::find(125);
        $comuna->macrozonas()->sync([104,105,106,107,108,109,100,101,102,103]);

        //Río Claro
        $comuna = Comuna::find(123);
        $comuna->macrozonas()->sync([104,105,106,107,108,109]);
        
        //Talca
        $comuna = Comuna::find(116);
        $comuna->macrozonas()->sync([104,105,106,107,108,109,100,101,102,103]);

        //Pencahue
        $comuna = Comuna::find(122);
        $comuna->macrozonas()->sync([104,105,106,107,108,109,100,101,102,103,98,99]);

        //Colbun
        $comuna = Comuna::find(139);
        $comuna->macrozonas()->sync([104,105,106,107,108,109]);

        //Linares
        $comuna = Comuna::find(138);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109]);

        //Longavi
        $comuna = Comuna::find(140);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109,100,101,102,103,126,127,128,118,119,120,121,122,123,124,125]);

        //Retiro
        $comuna = Comuna::find(138);
        $comuna->macrozonas()->sync([110,104,105,106,107,108,109,100,101,102,103]);

        //Cauquenes
        $comuna = Comuna::find(126);
        $comuna->macrozonas()->sync([104,105,106,107,108,109,100,101,102,103,98,99,118,119,120,121,122,123,124,125,114,115,116,117,111,112,113]);
    
        //Pelluhue
        $comuna = Comuna::find(128);
        $comuna->macrozonas()->sync([100,101,102,103,98,99,111,112,113]);

        //Chanco
        $comuna = Comuna::find(127);
        $comuna->macrozonas()->sync([100,101,102,103,98,99]);
        
        //Empedrado
        $comuna = Comuna::find(119);
        $comuna->macrozonas()->sync([100,101,102,103,98,99,104,105,106,107,108,109]);
        
        //San Javier
        $comuna = Comuna::find(114);
        $comuna->macrozonas()->sync([100,101,102,103,98,99,104,105,106,107,108,109]);

        //Constitución
        $comuna = Comuna::find(117);
        $comuna->macrozonas()->sync([100,101,102,103,98,99]);

        //Curepto
        $comuna = Comuna::find(118);
        $comuna->macrozonas()->sync([100,101,102,103,98,99]);

        //Huala
        $comuna = Comuna::find(351);
        $comuna->macrozonas()->sync([100,101,102,103,98,99,67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66]);

        //Vichuquén
        $comuna = Comuna::find(137);
        $comuna->macrozonas()->sync([60,61,62,63,64,65,66,98,99]);

        //Yerbas Buenas
        $comuna = Comuna::find(146);
        $comuna->macrozonas()->sync([104,105,106,107,108,109]);

        //Villa Alegre
        $comuna = Comuna::find(145);
        $comuna->macrozonas()->sync([104,105,106,107,108,109]);

        //Penco
        $comuna = Comuna::find(153);
        $comuna->macrozonas()->sync([111,112,113]);

        //Cabrero
        $comuna = Comuna::find(168);
        $comuna->macrozonas()->sync([126,127,128,119,120,121,122,123,124,125,114,115,116,117]);

        //Chiguayante 
        $comuna = Comuna::find(149);
        $comuna->macrozonas()->sync([111,112,113]);

        //Hualqui 
        $comuna = Comuna::find(151);
        $comuna->macrozonas()->sync([111,112,113,114,115,116,117]);

        //Concepcion 
        $comuna = Comuna::find(147);
        $comuna->macrozonas()->sync([111,112,113]);
        
        //Hualpen 
        $comuna = Comuna::find(158);
        $comuna->macrozonas()->sync([111,112,113]);

        //Coronel 
        $comuna = Comuna::find(148);
        $comuna->macrozonas()->sync([111,112,113]);

        //San pedro de la paz 
        $comuna = Comuna::find(154);
        $comuna->macrozonas()->sync([111,112,113]);

        //lota
        $comuna = Comuna::find(152);
        $comuna->macrozonas()->sync([111,112,113]);

        //Santa Juana
        $comuna = Comuna::find(155);
        $comuna->macrozonas()->sync([111,112,113,114,115,116,117]);

        //Curanilahue
        $comuna = Comuna::find(163);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,114,115,116,117,111,112,113]);

        //San Rosendo
        $comuna = Comuna::find(175);
        $comuna->macrozonas()->sync([114,115,116,117,111,112,113]);

        //Laja
        $comuna = Comuna::find(169);
        $comuna->macrozonas()->sync([118,119,120,121,122,123,124,125,114,115,116,117]);

        //Tomé
        $comuna = Comuna::find(157);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,114,115,116,117,111,112,113,118,119,120,121,122,123,124,125]);

        //Cañete
        $comuna = Comuna::find(161);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151]);

        //Florida
        $comuna = Comuna::find(150);
        $comuna->macrozonas()->sync([118,119,120,121,122,123,124,125,114,115,116,117,111,112,113]);

        //Yumbel
        $comuna = Comuna::find(178);
        $comuna->macrozonas()->sync([118,119,120,121,122,123,124,125,114,115,116,117,111,112,113]);

        //Los Angeles
        $comuna = Comuna::find(166);
        $comuna->macrozonas()->sync([126,127,128,118,119,120,121,122,123,124,125,114,115,116,117]);

        //Negrete
        $comuna = Comuna::find(172);
        $comuna->macrozonas()->sync([118,119,120,121,122,123,124,125,142,143,144,145,146,147,148,149,150,151,114,115,116,117,152,153,154,155,156,157,158,159,160,161]);

        //Mulch
        $comuna = Comuna::find(170);
        $comuna->macrozonas()->sync([126,127,128,152,153,154,155,156,157,158,159,160,161,118,119,120,121,122,123,124,125,162,163,164,165,166,167,168,169,170,171]);    
    
        //Quilaco
        $comuna = Comuna::find(173);
        $comuna->macrozonas()->sync([126,127,128,118,119,120,121,122,123,124,125,162,163,164,165,166,167,168,169,170,171]);

        //Santa Barbara
        $comuna = Comuna::find(176);
        $comuna->macrozonas()->sync([126,127,128,118,119,120,121,122,123,124,125]);

        //Antuco
        $comuna = Comuna::find(167);
        $comuna->macrozonas()->sync([126,127,128,118]);

        //Quilleco
        $comuna = Comuna::find(174);
        $comuna->macrozonas()->sync([126,127,128,118,119,120,121,122,123,124,125]);

        //Tucapel
        $comuna = Comuna::find(177);
        $comuna->macrozonas()->sync([126,127,128,118,119,120,121,122,123,124,125]);

        //Tirúa
        $comuna = Comuna::find(165);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,133,134,135,136,137,138,139,140,141]);

        //Contúlmo
        $comuna = Comuna::find(162);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151]);

        //Los Alamos
        $comuna = Comuna::find(164);
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151]);

        //Arauco
        $comuna = Comuna::find(160);
        $comuna->macrozonas()->sync([111,112,113]);

        //Talcahuano
        $comuna = Comuna::find(156);
        $comuna->macrozonas()->sync([111,112,113]);

        //Ñuble
        $comuna = Comuna::find(191);//Cobquecura
        $comuna->macrozonas()->sync([229,230,231,232,226,227,228]);//secano interior y secano costero

        $comuna = Comuna::find(190);//Quirihue
        $comuna->macrozonas()->sync([229,230,231,232,226,227,228]);//secano interior y secano costero

        $comuna = Comuna::find(193);//Ninhue
        $comuna->macrozonas()->sync([229,230,231,232,226,227,228]);//secano interior y secano costero

        $comuna = Comuna::find(196);//Treguaco
        $comuna->macrozonas()->sync([229,230,231,232,226,227,228]);//secano interior y secano costero

        $comuna = Comuna::find(197);//San Carlos
        $comuna->macrozonas()->sync([229,230,231,232,233,234,235,236,237,238,239,240]);//secano interior y depresion intermedia

        $comuna = Comuna::find(201);//San Nicolás
        $comuna->macrozonas()->sync([229,230,231,232,233,234,235,236,237,238,239,240]);//secano interior y depresion intermedia

        $comuna = Comuna::find(199);//Ñiquén
        $comuna->macrozonas()->sync([229,230,231,232,233,234,235,236,237,238,239,240,241,242,243]);//secano interior, depresion intermedia y precordillera

        $comuna = Comuna::find(200);//San Fabián
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(298);//Coihueco
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(181);//Chillán
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,229,230,231,232]);//depresion intermedia y secano interior

        $comuna = Comuna::find(183);//Chillán viejo
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240]);//depresion intermedia 

        $comuna = Comuna::find(194);//Portezuelo
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,229,230,231,232,226,227,228]);//depresion intermedia, secano interior y secano costero

        $comuna = Comuna::find(192);//Coelemu
        $comuna->macrozonas()->sync([229,230,231,232,226,227,228]);//secano interior y secano costero

        $comuna = Comuna::find(195);//Ranquil
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,229,230,231,232,226,227,228]);//depresion intermedia, secano interior y secano costero

        $comuna = Comuna::find(186);//Pinto
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(189);//Yungay
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(185);//Pemuco
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(184);//El Carmen
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(188);//San Ignacio
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,241,242,243]);//depresion intermedia y precordillera

        $comuna = Comuna::find(182);//Bulnes
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,229,230,231,232]);//depresion intermedia y secano interior

        $comuna = Comuna::find(187);//Quillón
        $comuna->macrozonas()->sync([233,234,235,236,237,238,239,240,229,230,231,232,226,227,228]);//depresion intermedia, secano interior y secano costero

        //Arica y parinacota
        $comuna = Comuna::find(1);//Arica
        $comuna->macrozonas()->sync([7,8,9,2,3,4,5,6]);//Desértico cálido con nublados abundantes,Desértico frío y Desértico normal

        $comuna = Comuna::find(4);//General Lagos
        $comuna->macrozonas()->sync([2,3,1]);//Tundra y Desértico frío 

        $comuna = Comuna::find(2);//Camarones
        $comuna->macrozonas()->sync([7,8,9,2,3,4,5,6,1]);//Desértico cálido con nublados abundantes,Desértico frío Desértico normal y tundra

        $comuna = Comuna::find(3);//Putre
        $comuna->macrozonas()->sync([1,2,3]);//Desértico frío y tundra

        //Los rios
        $comuna = Comuna::find(238);//Máfil
        $comuna->macrozonas()->sync([173,174,175,176,177,178,179]);//Secano interior y valle secano

        $comuna = Comuna::find(237);//Los Lagos
        $comuna->macrozonas()->sync([173,174,175,176,177,178,179,180,181,182]);//Secano interior, valle secano y precordillera

        $comuna = Comuna::find(240);//Paillaco
        $comuna->macrozonas()->sync([173,174,175,176,177,178,179,172]);//Secano interior, valle secano y secano costero

        $comuna = Comuna::find(235);//Corral
        $comuna->macrozonas()->sync([173,174,175,172]);//Secano interior y secano costero

        $comuna = Comuna::find(234);//Valdivia
        $comuna->macrozonas()->sync([173,174,175,172,176,177,178,179]);//Secano interior, secano costero y valle secano

        $comuna = Comuna::find(236);//Lanco
        $comuna->macrozonas()->sync([173,174,175,176,177,178,179,180,181,182,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, valle secano y precordillera

        $comuna = Comuna::find(239);//Mariquina
        $comuna->macrozonas()->sync([173,174,175,172,176,177,178,179,142,143,144,145,146,147,148,149,150,151,133,134,135,136,137,138,139,140,141]);//Secano interior, valle secano y secano costero

        $comuna = Comuna::find(243);//Futrono
        $comuna->macrozonas()->sync([173,174,175,180,181,182,176,177,178,179]);//secano interior, precordillera y valle secano

        $comuna = Comuna::find(244);//Lago Ranco
        $comuna->macrozonas()->sync([180,181,182,176,177,178,179]);//precordillera y valle secano

        $comuna = Comuna::find(241);//Panguipulli
        $comuna->macrozonas()->sync([180,181,182,176,177,178,179,162,163,164,165,166,167,168,169,170,171,152,153,154,155,156,157,158,159,160,161]);//precordillera y valle secano

        $comuna = Comuna::find(242);//La Unión
        $comuna->macrozonas()->sync([173,174,175,172,180,181,182,176,177,178,179,195,196,197,198,187,188,189,183,184,185,186]);//secano interior, secano costero, precordillera, valle secano

        $comuna = Comuna::find(245);//Río Bueno
        $comuna->macrozonas()->sync([173,174,175,180,181,182,176,177,178,179,195,196,197,198,202,203,204]);//secano interior, precordillera, valle secano

        //Metropolitana
        $comuna = Comuna::find(292);//Santiago
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(293);//Cerrillos
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(294);//Cerro Navia
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(295);//Conchalí
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(296);//El Bosque
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(297);//Estación Central
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(300);//La Cisterna
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(301);//La Florida
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(301);//La Florida
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(302);//La Granja
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(303);//La Granja
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(304);//La Pintana
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(305);//La Reina
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(308);//Lo Espejo
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(309);//Lo Prado
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(310);//Macul
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(312);//Ñuñoa
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(313);//Pedro Aguirre Cerda
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(314);//Peñalolén
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(315);//Providencia
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(318);//Quinta Normal
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(319);//Recoleta
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(320);//Renca
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(322);//San Miguel
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(323);//San Ramón
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(299);//Independencia
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(325);//Puente Alto
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(306);//Las Condes
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59]);//Valle transversal y precordillera

        $comuna = Comuna::find(324);//Vitacura
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59]);//Valle transversal y precordillera

        $comuna = Comuna::find(317);//Quilicura
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58]);//Valle transversal y secano interior

        $comuna = Comuna::find(298);//Huechuraba
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59]);//Valle transversal y precordillera

        $comuna = Comuna::find(311);//Maipú
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(316);//Pudahuel
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58]);//Valle transversal y secano interior

        $comuna = Comuna::find(331);//San Bernardo
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(330);//Tiltil
        $comuna->macrozonas()->sync([44,45,50,51,52,53,54,55,56,57,58]);//Valle transversal, secano interior, Templado Mediterráneo en Valle Central Interior y Templado Mediterraneo con Influencia Marina en Valle Central

        $comuna = Comuna::find(329);//Lampa
        $comuna->macrozonas()->sync([44,45,51,52,53,54,55,56,57,58]);//Valle transversal, secano interior, y Templado Mediterraneo con Influencia Marina en Valle Central

        $comuna = Comuna::find(329);//Colina
        $comuna->macrozonas()->sync([49,50,51,52,53,54,55,56,57,58,59]);//Valle transversal, secano interior, precordillera, Templado Mediterráneo en Valle Central Interior y Templado Mediterraneo en Precordillera Andina

        $comuna = Comuna::find(307);//Lo Barnechea
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59,49]);//Valle transversal precordillera y Templado Mediterraneo en Precordillera Andina

        $comuna = Comuna::find(327);//San José de Maipo
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59,93,94,95,96,97,49]);//Valle transversal, precordillera y Templado Mediterraneo en Precordillera Andina

        $comuna = Comuna::find(326);//Pirque
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59,93,94,95,96,97]);//Valle transversal y precordillera

        $comuna = Comuna::find(334);//Paine
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58,59,93,94,95,96,97,81,82,83,84,85,86,87,88,89,90,91,92]);//Valle transversal, precordillera, secano interior y depresion intermedia

        $comuna = Comuna::find(332);//Buin
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,59]);//Valle transversal y precordillera

        $comuna = Comuna::find(336);//Alhué
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58,81,82,83,84,85,86,87,88,89,90,91,92]);//Valle transversal, secano interior y depresion intermedia

        $comuna = Comuna::find(335);//Melipilla
        $comuna->macrozonas()->sync([44,45,51,52,53,54,55,56,57,58,59]);//Valle transversal, secano interior, precordillera y Templado Mediterráneo con influencia maritima
        
        $comuna = Comuna::find(339);//San Pedro
        $comuna->macrozonas()->sync([44,45,51,52,53,54,55,56,57,58,59,81,82,83,84,85,86,87,88,89,90,91,92,67,68,69,70,71,72,73,74,75,76,77,78,79,80,60,61,62,63,64,65,66]);//Valle transversal, secano interior, precordillera, Templado Mediterráneo con influencia maritima, depresion intermedia y secano costero
        
        $comuna = Comuna::find(338);//María Pinto
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58,44,45]);//Valle transversal, secano interior y Templado Mediterraneo con Influencia Marina en Valle Central

        $comuna = Comuna::find(337);//Curacaví
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57,58,44,45]);//Valle transversal, secano interior y Templado Mediterraneo con Influencia Marina en Valle Central

        $comuna = Comuna::find(344);//Peñaflor
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(333);//Calera de Tango
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(343);//Padre Hurtado
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(341);//El Monte
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(340);//Talagante
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        $comuna = Comuna::find(342);//Isla de Maipo
        $comuna->macrozonas()->sync([51,52,53,54,55,56,57]);//Valle transversal

        //Magallanes

        $comuna = Comuna::find(291);//Torres del Paine
        $comuna->macrozonas()->sync([216,217,218,219]);//Zona Húmeda
        
        $comuna = Comuna::find(288);//Primavera
        $comuna->macrozonas()->sync([220,221,222,223,224,225]);//Zona de Transición y Zona de Estepa

        $comuna = Comuna::find(287);//Porvenir
        $comuna->macrozonas()->sync([216,217,218,219,220,221,222,223,224,225]);//Zona Húmeda,Zona de Transición y Zona de Estepa

        $comuna = Comuna::find(285);//Cabo de Hornos
        $comuna->macrozonas()->sync([216,217,218,219]);//Zona Húmeda

        $comuna = Comuna::find(283);//Río Verde
        $comuna->macrozonas()->sync([216,217,218,219,220,221,222,223]);//Zona Húmeda y Zona de transición

        $comuna = Comuna::find(289);//Timaukel
        $comuna->macrozonas()->sync([216,217,218,219,220,221,222,223]);//Zona Húmeda y Zona de transición

        $comuna = Comuna::find(281);//Punta Arenas
        $comuna->macrozonas()->sync([216,217,218,219,220,221,222,223]);//Zona Húmeda y Zona de transición

        $comuna = Comuna::find(284);//San Gregorio
        $comuna->macrozonas()->sync([220,221,222,223,224,225]);//Zona de Transición y Zona de Estepa

        $comuna = Comuna::find(282);//Laguna Blanca
        $comuna->macrozonas()->sync([216,217,218,219,220,221,222,223,224,225]);//Zona Húmeda,Zona de Transición y Zona de Estepa

        $comuna = Comuna::find(290);//Natales
        $comuna->macrozonas()->sync([216,217,218,219]);//Zona Húmeda

        //Aysén
        $comuna = Comuna::find(277);//O’Higgins
        $comuna->macrozonas()->sync([207,208,209,210,216,217,218,219]);//Zona Húmeda y Zona Intermedia

        $comuna = Comuna::find(278);//Tortel
        $comuna->macrozonas()->sync([205,206,207,208,209,210,216,217,218,219]);//Zona Húmeda y Zona Intermedia

        $comuna = Comuna::find(276);//Cochrane
        $comuna->macrozonas()->sync([207,208,209,210]);//Zona Intermedia

        $comuna = Comuna::find(280);//Río Ibáñez
        $comuna->macrozonas()->sync([207,208,209,210,213,214,215]);//Zona Intermedia y Zona de Microclima

        $comuna = Comuna::find(279);//Chile Chico
        $comuna->macrozonas()->sync([207,208,209,210,213,214,215]);//Zona Intermedia y Zona de Microclima

        $comuna = Comuna::find(271);//Coihaique
        $comuna->macrozonas()->sync([207,208,209,210,211,212]);//Zona Intermedia y Zona de Estepa

        $comuna = Comuna::find(272);//Lago Verde
        $comuna->macrozonas()->sync([207,208,209,210,211,212]);//Zona Intermedia y Zona de Estepa

        $comuna = Comuna::find(273);//Aisén
        $comuna->macrozonas()->sync([205,206,207,208,209,210]);//Zona Húmeda y Zona Intermedia

        $comuna = Comuna::find(274);//Cisnes
        $comuna->macrozonas()->sync([205,206,207,208,209,210]);//Zona Húmeda y Zona Intermedia

        //Los Lagos
        $comuna = Comuna::find(246);//Puerto Montt
        $comuna->macrozonas()->sync([199,200,201,202,203,204]);//Precordillera y Ñadis

        $comuna = Comuna::find(252);//Llanquihue
        $comuna->macrozonas()->sync([195,196,197,198,199,200,201]);//Valle secano y Ñadis

        $comuna = Comuna::find(249);//Fresia
        $comuna->macrozonas()->sync([183,184,185,186,187,188,189,190,195,196,197,198,199,200,201]);//Valle secano, Ñadis, Secano Interior y secano costero

        $comuna = Comuna::find(250);//Frutillar
        $comuna->macrozonas()->sync([187,188,189,190,195,196,197,198,199,200,201]);//Valle secano, Ñadis y Secano Interior

        $comuna = Comuna::find(266);//Purranque
        $comuna->macrozonas()->sync([183,184,185,186,187,188,189,190,195,196,197,198,199,200,201]);//Valle secano, Ñadis, Secano Interior y secano costero

        $comuna = Comuna::find(268);//Río Negro
        $comuna->macrozonas()->sync([183,184,185,186,187,188,189,190,195,196,197,198,199,200,201]);//Valle secano, Ñadis, Secano Interior y secano costero

        $comuna = Comuna::find(264);//Osorno
        $comuna->macrozonas()->sync([183,184,185,186,187,188,189,190,195,196,197,198,199,200,201,202,203,204]);//Valle secano, Ñadis, Secano Interior, secano costero y precordillera

        $comuna = Comuna::find(265);//Puerto Octay
        $comuna->macrozonas()->sync([195,196,197,198,199,200,201,202,203,204]);//Valle secano, Ñadis y precordillera

        $comuna = Comuna::find(247);//Calbuco
        $comuna->macrozonas()->sync([195,196,197,198,199,200,201]);//Valle secano y Ñadis

        $comuna = Comuna::find(247);//Calbuco
        $comuna->macrozonas()->sync([183,184,185,186,195,196,197,198,199,200,201]);//Valle secano, Ñadis y secano costero

        $comuna = Comuna::find(251);//Los Muermos
        $comuna->macrozonas()->sync([183,184,185,186,187,188,189,190,195,196,197,198,199,200,201]);//Valle secano, Ñadis, Secano Interior y secano costero

        $comuna = Comuna::find(345);//Quemchi
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(261);//Puqueldón
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(261);//Puqueldón
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(346);//Quinchao
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(255);//Castro
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(257);//Chonchi
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(262);//Queilén
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(263);//Quellón
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(258);//Curaco de Vélez
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(259);//Dalcahue
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(260);//Dalcahue
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(256);//Ancud
        $comuna->macrozonas()->sync([191,192,193,194]);//Isla de Chiloé

        $comuna = Comuna::find(269);//San Juan de la Costa
        $comuna->macrozonas()->sync([172,183,184,185,186,187,188,189,190,195,196,197,198]);//Valle secano, Secano Interior y secano costero

        $comuna = Comuna::find(270);//San Pablo
        $comuna->macrozonas()->sync([172,173,174,175,176,177,178,179,183,184,185,186,187,188,189,190,195,196,197,198]);//Valle secano, Secano Interior y secano costero

        $comuna = Comuna::find(254);//Puerto Varas
        $comuna->macrozonas()->sync([195,196,197,198,199,200,201,202,203,204]);//Valle secano, Ñadis y precordillera

        $comuna = Comuna::find(248);//Cochamó
        $comuna->macrozonas()->sync([202,203,204]);//Precordillera

        $comuna = Comuna::find(267);//Puyehue
        $comuna->macrozonas()->sync([176,177,178,179,180,181,182,195,196,197,198,202,203,204]);//Valle secano, precordillera

        $comuna = Comuna::find(349);//Palena
        $comuna->macrozonas()->sync([205,206,207,208,209,210]);//Zona humeda y zona intermedia

        $comuna = Comuna::find(350);//Chaiten
        $comuna->macrozonas()->sync([191,192,193,194,205,206]);//Zona humeda e isla de Chiloe

        //Araucanía
        $comuna = Comuna::find(226);//Ercilla
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);//Secano interior, Valle secano y precordillera

        $comuna = Comuna::find(233);//Victoria
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);//Secano interior, Valle secano y precordillera

        $comuna = Comuna::find(209);//Lautaro
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);// Valle secano y precordillera

        $comuna = Comuna::find(214);//Perquenco
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161]);// Valle secano 

        $comuna = Comuna::find(232);//Traiguén
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano

        $comuna = Comuna::find(228);//Los Sauces
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano

        $comuna = Comuna::find(218);//Teodoro Schmidt
        $comuna->macrozonas()->sync([133,134,135,136,137,138,139,140,141,152,153,154,155,156,157,158,159,160,161]);//Secano costero y Valle secano

        $comuna = Comuna::find(217);//Saavedra
        $comuna->macrozonas()->sync([133,134,135,136,137,138,139,140,141,152,153,154,155,156,157,158,159,160,161]);//Secano costero y Valle secano

        $comuna = Comuna::find(215);//Pitrufquén
        $comuna->macrozonas()->sync([133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano costero,secano interior y Valle secano

        $comuna = Comuna::find(204);//Cunco
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);// Valle secano y precordillera

        $comuna = Comuna::find(207);//Galvarino
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano

        $comuna = Comuna::find(222);//Cholchol
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano

        $comuna = Comuna::find(202);//Temuco
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161]);// Valle secano 

        $comuna = Comuna::find(206);//Freire
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161]);// Valle secano 

        $comuna = Comuna::find(213);//Padre las Casas
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161]);// Valle secano 

        $comuna = Comuna::find(212);//Nueva Imperial
        $comuna->macrozonas()->sync([133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano costero,secano interior y Valle secano

        $comuna = Comuna::find(220);//Vilcún
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);// Valle secano y precordillera

        $comuna = Comuna::find(223);//Angol
        $comuna->macrozonas()->sync([114,115,116,117,129,130,131,132,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano y Provincia de Arauco

        $comuna = Comuna::find(225);//Curacautín
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);// Valle secano y precordillera

        $comuna = Comuna::find(203);//Carahue
        $comuna->macrozonas()->sync([129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano costero,secano interior, Valle secano y provincia de Arauco

        $comuna = Comuna::find(231);//Renaico
        $comuna->macrozonas()->sync([111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);//Secano interior, Valle secano, precordillera y depresion intermedia

        $comuna = Comuna::find(230);//Purén
        $comuna->macrozonas()->sync([129,130,131,132,142,143,144,145,146,147,148,149,150,151]);//Secano interior y Provincia de Arauco

        $comuna = Comuna::find(224);//Collipulli
        $comuna->macrozonas()->sync([118,119,120,121,122,123,124,125,126,127,128,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171]);// Valle secano, precordillera y depresion intermedia

        $comuna = Comuna::find(219);//Toltén
        $comuna->macrozonas()->sync([172,173,174,175,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161]);//Secano interior, Valle secano, secano costero,

        $comuna = Comuna::find(221);//Villarrica
        $comuna->macrozonas()->sync([152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,180,181,182,176,177,178,179]);// Valle secano y precordillera

        $comuna = Comuna::find(210);//Loncoche
        $comuna->macrozonas()->sync([142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,176,177,178,179,173,174,175]);//Secano interior, Valle secano

        $comuna = Comuna::find(216);//Pucón
        $comuna->macrozonas()->sync([162,163,164,165,166,167,168,169,170,171,180,181,182]);// Precordillera

        $comuna = Comuna::find(208);//Gorbea
        $comuna->macrozonas()->sync([133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,173,174,175]);//Secano costero,secano interior y Valle secano

        $comuna = Comuna::find(211);//Melipeuco
        $comuna->macrozonas()->sync([162,163,164,165,166,167,168,169,170,171]);// Precordillera

        $comuna = Comuna::find(227);//Lonquimay
        $comuna->macrozonas()->sync([162,163,164,165,166,167,168,169,170,171]);// Precordillera

        $comuna = Comuna::find(205);//Curarrehue
        $comuna->macrozonas()->sync([162,163,164,165,166,167,168,169,170,171,180,181,182]);// Precordillera

    
    }
}
