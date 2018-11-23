<?php

use Illuminate\Database\Seeder;
use App\Comuna;

class ComunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Arica y Parinacota
        Comuna::create([
            "nombre" => "Arica",
            "codigo" => "15101",
            "region_id" => "2"
        ]);

        Comuna::create([
            "nombre" => "Camarones",
            "codigo" => "15102",
            "region_id" => "2"
        ]);

        Comuna::create([
            "nombre" => "Putre",
            "codigo" => "15201",
            "region_id" => "2"
        ]);
        Comuna::create([
            "nombre" => "General Lagos",
            "codigo" => "15202",
            "region_id" => "2"
        ]);

        //Tarapacá
        Comuna::create([
            "nombre" => "Iquique",
            "codigo" => "01101",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Alto Hospicio",
            "codigo" => "01107",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Pozo Almonte",
            "codigo" => "01401",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Camiña",
            "codigo" => "01402",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Colchane",
            "codigo" => "01403",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Huara",
            "codigo" => "01404",
            "region_id" => "3"
        ]);
        Comuna::create([
            "nombre" => "Pica",
            "codigo" => "01405",
            "region_id" => "3"
        ]);

        //Antofagasta
        Comuna::create([
            "nombre" => "Antofagasta",
            "codigo" => "02101",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Mejillones",
            "codigo" => "02102",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Sierra Gorda",
            "codigo" => "02103",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Taltal",
            "codigo" => "02104",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Calama",
            "codigo" => "02201",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Ollagüe",
            "codigo" => "02202",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "San Pedro de Atacama",
            "codigo" => "02203",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "Tocopilla",
            "codigo" => "02301",
            "region_id" => "4"
        ]);
        Comuna::create([
            "nombre" => "María Elena",
            "codigo" => "02302",
            "region_id" => "4"
        ]);

        //Atacama
        Comuna::create([
            "nombre" => "Copiapó",
            "codigo" => "03101",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Caldera",
            "codigo" => "03102",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Tierra Amarilla",
            "codigo" => "03103",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Chañaral",
            "codigo" => "03201",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Diego de Almagro",
            "codigo" => "03202",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Vallenar",
            "codigo" => "03301",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Alto del Carmen",
            "codigo" => "03302",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Freirina",
            "codigo" => "03303",
            "region_id" => "5"
        ]);
        Comuna::create([
            "nombre" => "Huasco",
            "codigo" => "03304",
            "region_id" => "5"
        ]);

        //Coquimbo
        Comuna::create([
            "nombre" => "La Serena",
            "codigo" => "04101",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Coquimbo",
            "codigo" => "04102",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Andacollo",
            "codigo" => "04103",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "La Higuera",
            "codigo" => "04104",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Paiguano",
            "codigo" => "04105",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Vicuña",
            "codigo" => "04106",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Illapel",
            "codigo" => "04201",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Canela",
            "codigo" => "04202",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Los Vilos",
            "codigo" => "04203",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Salamanca",
            "codigo" => "04204",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Ovalle",
            "codigo" => "04301",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Combarbalá",
            "codigo" => "04302",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Monte Patria",
            "codigo" => "04303",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Punitaqui",
            "codigo" => "04304",
            "region_id" => "6"
        ]);
        Comuna::create([
            "nombre" => "Río Hurtado",
            "codigo" => "04305",
            "region_id" => "6"
        ]);

        //Valparaíso
        Comuna::create([
            "nombre" => "Valparaíso",
            "codigo" => "05101",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Casablanca",
            "codigo" => "05102",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Concón",
            "codigo" => "05103",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Juan Fernández",
            "codigo" => "05104",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Puchuncaví",
            "codigo" => "05105",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Quintero",
            "codigo" => "05107",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Viña del Mar",
            "codigo" => "05109",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Isla de Pascua",
            "codigo" => "05201",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Los Andes",
            "codigo" => "05301",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Calle Larga",
            "codigo" => "05302",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Rinconada",
            "codigo" => "05303",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "San Esteban",
            "codigo" => "05304",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "La Ligua",
            "codigo" => "05401",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Cabildo",
            "codigo" => "05402",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Papudo",
            "codigo" => "05403",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Petorca",
            "codigo" => "05404",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Zapallar",
            "codigo" => "05405",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Quillota",
            "codigo" => "05501",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Calera",
            "codigo" => "05502",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Hijuelas",
            "codigo" => "05503",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "La Cruz",
            "codigo" => "05504",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Nogales",
            "codigo" => "05506",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "San Antonio",
            "codigo" => "05601",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Algarrobo",
            "codigo" => "05602",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Cartagena",
            "codigo" => "05603",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "El Quisco",
            "codigo" => "05604",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "El Tabo",
            "codigo" => "05605",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Santo Domingo",
            "codigo" => "05606",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "San Felipe",
            "codigo" => "05701",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Catemu",
            "codigo" => "05702",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Llaillay",
            "codigo" => "05703",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Panquehue",
            "codigo" => "05704",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Putaendo",
            "codigo" => "05705",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Santa María",
            "codigo" => "05706",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Quilpué",
            "codigo" => "05801",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Limache",
            "codigo" => "05802",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Olmué",
            "codigo" => "05803",
            "region_id" => "7"
        ]);
        Comuna::create([
            "nombre" => "Villa Alemana",
            "codigo" => "05804",
            "region_id" => "7"
        ]);

        // Libertador Bernardo O'higgins
        Comuna::create([
            "nombre" => "Rancagua",
            "codigo" => "06101",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Codegua",
            "codigo" => "06102",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Coinco",
            "codigo" => "06103",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Coltauco",
            "codigo" => "06104",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Doñihue",
            "codigo" => "06105",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Graneros",
            "codigo" => "06106",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Las Cabras",
            "codigo" => "06107",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Machalí",
            "codigo" => "06108",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Malloa",
            "codigo" => "06109",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Mostazal",
            "codigo" => "06110",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Olivar",
            "codigo" => "06111",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Peumo",
            "codigo" => "06112",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Pichidegua",
            "codigo" => "06113",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Quinta de Tilcoco",
            "codigo" => "06114",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Rengo",
            "codigo" => "06115",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Requínoa",
            "codigo" => "06116",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "San Vicente",
            "codigo" => "06117",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Pichilemu",
            "codigo" => "06201",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "La Estrella",
            "codigo" => "06202",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Litueche",
            "codigo" => "06203",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Marchihue",
            "codigo" => "06204",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Navidad",
            "codigo" => "06205",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Paredones",
            "codigo" => "06206",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "San Fernando",
            "codigo" => "06301",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Chépica",
            "codigo" => "06302",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Chimbarongo",
            "codigo" => "06303",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Lolol",
            "codigo" => "06304",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Nancagua",
            "codigo" => "06305",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Palmilla",
            "codigo" => "06306",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Peralillo",
            "codigo" => "06307",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Placilla",
            "codigo" => "06308",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Pumanque",
            "codigo" => "06309",
            "region_id" => "8"
        ]);
        Comuna::create([
            "nombre" => "Santa Cruz",
            "codigo" => "06310",
            "region_id" => "8"
        ]);

        //Maule
        Comuna::create([
            "nombre" => "Talca",
            "codigo" => "07101",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Constitución",
            "codigo" => "07102",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Curepto",
            "codigo" => "07103",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Empedrado",
            "codigo" => "07104",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Maule",
            "codigo" => "07105",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Pelarco",
            "codigo" => "07106",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Pencahue",
            "codigo" => "07107",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Río Claro",
            "codigo" => "07108",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "San Clemente",
            "codigo" => "07109",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "San Rafael",
            "codigo" => "07110",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Cauquenes",
            "codigo" => "07201",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Chanco",
            "codigo" => "07202",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Pelluhue",
            "codigo" => "07203",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Curicó",
            "codigo" => "07301",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Hualañé",
            "codigo" => "07302",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Licantén",
            "codigo" => "07303",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Molina",
            "codigo" => "07304",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Rauco",
            "codigo" => "07305",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Romeral",
            "codigo" => "07306",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Sagrada Familia",
            "codigo" => "07307",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Teno",
            "codigo" => "07308",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Vichuquén",
            "codigo" => "07309",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Linares",
            "codigo" => "07401",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Colbún",
            "codigo" => "07402",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Longaví",
            "codigo" => "07403",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Parral",
            "codigo" => "07404",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Parral",
            "codigo" => "07404",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Retiro",
            "codigo" => "07405",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "San Javier",
            "codigo" => "07406",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Villa Alegre",
            "codigo" => "07407",
            "region_id" => "9"
        ]);
        Comuna::create([
            "nombre" => "Yerbas Buenas",
            "codigo" => "07408",
            "region_id" => "9"
        ]);
        
        //Bío Bío
        Comuna::create([
            "nombre" => "Concepción",
            "codigo" => "08101",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Coronel",
            "codigo" => "08102",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Chiguayante",
            "codigo" => "08103",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Florida",
            "codigo" => "08104",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Hualqui",
            "codigo" => "08105",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Lota",
            "codigo" => "08106",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Penco",
            "codigo" => "08107",
            "region_id" => "10"
        ]);   
        Comuna::create([
            "nombre" => "San Pedro de la Paz",
            "codigo" => "08108",
            "region_id" => "10"
        ]);   
        Comuna::create([
            "nombre" => "Santa Juana",
            "codigo" => "08109",
            "region_id" => "10"
        ]);   
        Comuna::create([
            "nombre" => "Talcahuano",
            "codigo" => "08110",
            "region_id" => "10"
        ]); 
        Comuna::create([
            "nombre" => "Tomé",
            "codigo" => "08111",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Hualpén",
            "codigo" => "08112",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Lebu",
            "codigo" => "08201",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Arauco",
            "codigo" => "08202",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Cañete",
            "codigo" => "08203",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Contulmo",
            "codigo" => "08204",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Curanilahue",
            "codigo" => "08205",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Los Alamos",
            "codigo" => "08206",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Tirúa",
            "codigo" => "08207",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Los Angeles",
            "codigo" => "08301",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Antuco",
            "codigo" => "08302",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Cabrero",
            "codigo" => "08303",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Laja",
            "codigo" => "08304",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Mulchén",
            "codigo" => "08305",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Nacimiento",
            "codigo" => "08306",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Negrete",
            "codigo" => "08307",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Quilaco",
            "codigo" => "08308",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Quilleco",
            "codigo" => "08309",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "San Rosendo",
            "codigo" => "08310",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Santa Bárbara",
            "codigo" => "08311",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Tucapel",
            "codigo" => "08312",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Yumbel",
            "codigo" => "08313",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Alto Biobío",
            "codigo" => "08314",
            "region_id" => "10"
        ]);
        Comuna::create([
            "nombre" => "Alto Biobío",
            "codigo" => "08314",
            "region_id" => "10"
        ]);

        //Ñuble
        Comuna::create([
            "nombre" => "Chillán",
            "codigo" => "16101",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Bulnes",
            "codigo" => "16102",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Chillán Viejo",
            "codigo" => "16103",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "El Carmen",
            "codigo" => "16104",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Pemuco",
            "codigo" => "16105",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Pinto",
            "codigo" => "16106",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Quillón",
            "codigo" => "16107",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "San Ignacio",
            "codigo" => "16108",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Yungay",
            "codigo" => "16109",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Quirihue",
            "codigo" => "16201",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Cobquecura",
            "codigo" => "16202",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Coelemu",
            "codigo" => "16203",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Ninhue",
            "codigo" => "16204",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Portezuelo",
            "codigo" => "16205",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Ranquil",
            "codigo" => "16206",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Treguaco",
            "codigo" => "16207",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "San Carlos",
            "codigo" => "16301",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Coihueco",
            "codigo" => "16302",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "Ñiquén",
            "codigo" => "16303",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "San Fabián",
            "codigo" => "16304",
            "region_id" => "11"
        ]);
        Comuna::create([
            "nombre" => "San Nicolás",
            "codigo" => "16305",
            "region_id" => "11"
        ]);

        //Araucanía
        Comuna::create([
            "nombre" => "Temuco",
            "codigo" => "09101",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Carahue",
            "codigo" => "09102",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Cunco",
            "codigo" => "09103",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Curarrehue",
            "codigo" => "09104",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Freire",
            "codigo" => "09105",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Galvarino",
            "codigo" => "09106",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Gorbea",
            "codigo" => "09107",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Lautaro",
            "codigo" => "09108",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Loncoche",
            "codigo" => "09109",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Melipeuco",
            "codigo" => "09110",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Nueva Imperial",
            "codigo" => "09111",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Padre las Casas",
            "codigo" => "09112",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Perquenco",
            "codigo" => "09113",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Pitrufquén",
            "codigo" => "09114",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Pucón",
            "codigo" => "09115",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Saavedra",
            "codigo" => "09116",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Teodoro Schmidt",
            "codigo" => "09117",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Toltén",
            "codigo" => "09118",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Vilcún",
            "codigo" => "09119",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Villarrica",
            "codigo" => "09120",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Cholchol",
            "codigo" => "09121",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Angol",
            "codigo" => "09201",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Collipulli",
            "codigo" => "09202",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Curacautín",
            "codigo" => "09203",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Ercilla",
            "codigo" => "09204",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Lonquimay",
            "codigo" => "09205",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Los Sauces",
            "codigo" => "09206",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Lumaco",
            "codigo" => "09207",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Purén",
            "codigo" => "09208",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Renaico",
            "codigo" => "09209",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Traiguén",
            "codigo" => "09210",
            "region_id" => "12"
        ]);
        Comuna::create([
            "nombre" => "Victoria",
            "codigo" => "09211",
            "region_id" => "12"
        ]);
        
        //Los Ríos
        Comuna::create([
            "nombre" => "Valdivia",
            "codigo" => "14101",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Corral",
            "codigo" => "14102",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Lanco",
            "codigo" => "14103",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Los Lagos",
            "codigo" => "14104",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Máfil",
            "codigo" => "14105",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Mariquina",
            "codigo" => "14106",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Paillaco",
            "codigo" => "14107",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Panguipulli",
            "codigo" => "14108",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "La Unión",
            "codigo" => "14201",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Futrono",
            "codigo" => "14202",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Lago Ranco",
            "codigo" => "14203",
            "region_id" => "17"
        ]);
        Comuna::create([
            "nombre" => "Río Bueno",
            "codigo" => "14204",
            "region_id" => "17"
        ]);

        //Los Lagos
        Comuna::create([
            "nombre" => "Puerto Montt",
            "codigo" => "10101",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Calbuco",
            "codigo" => "10102",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Cochamó",
            "codigo" => "10103",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Fresia",
            "codigo" => "10104",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Frutillar",
            "codigo" => "10105",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Los Muermos",
            "codigo" => "10106",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Llanquihue",
            "codigo" => "10107",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Maullín",
            "codigo" => "10108",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Puerto Varas",
            "codigo" => "10109",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Castro",
            "codigo" => "10201",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Ancud",
            "codigo" => "10202",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Chonchi",
            "codigo" => "10203",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Curaco de Vélez",
            "codigo" => "10204",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Dalcahue",
            "codigo" => "10205",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Dalcahue",
            "codigo" => "10205",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Puqueldón",
            "codigo" => "10206",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Queilén",
            "codigo" => "10207",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Quellón",
            "codigo" => "10208",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Osorno",
            "codigo" => "10301",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Puerto Octay",
            "codigo" => "10302",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Purranque",
            "codigo" => "10303",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Puyehue",
            "codigo" => "10304",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "Río Negro",
            "codigo" => "10305",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "San Juan de la Costa",
            "codigo" => "10306",
            "region_id" => "13"
        ]);
        Comuna::create([
            "nombre" => "San Pablo",
            "codigo" => "10307",
            "region_id" => "13"
        ]);

        //Aisén
        Comuna::create([
            "nombre" => "Coihaique",
            "codigo" => "11101",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Lago Verde",
            "codigo" => "11102",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Aisén",
            "codigo" => "11201",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Cisnes",
            "codigo" => "11202",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Guaitecas",
            "codigo" => "11203",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Cochrane",
            "codigo" => "11301",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "O’Higgins",
            "codigo" => "11302",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Tortel",
            "codigo" => "11303",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Chile Chico",
            "codigo" => "11401",
            "region_id" => "14"
        ]);
        Comuna::create([
            "nombre" => "Río Ibáñez",
            "codigo" => "11402",
            "region_id" => "14"
        ]);

        //Magallanes
        Comuna::create([
            "nombre" => "Punta Arenas",
            "codigo" => "12101",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Laguna Blanca",
            "codigo" => "12102",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Río Verde",
            "codigo" => "12103",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "San Gregorio",
            "codigo" => "12104",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Cabo de Hornos",
            "codigo" => "12201",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Antártica",
            "codigo" => "12202",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Porvenir",
            "codigo" => "12301",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Primavera",
            "codigo" => "12302",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Timaukel",
            "codigo" => "1230123032",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Natales",
            "codigo" => "12401",
            "region_id" => "15"
        ]);
        Comuna::create([
            "nombre" => "Torres del Paine",
            "codigo" => "12402",
            "region_id" => "15"
        ]);

        //Metropolitana
        Comuna::create([
            "nombre" => "Santiago",
            "codigo" => "13101",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Cerrillos",
            "codigo" => "13102",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Cerro Navia",
            "codigo" => "13103",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Conchalí",
            "codigo" => "13104",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "El Bosque",
            "codigo" => "13105",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Estación Central",
            "codigo" => "13106",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Huechuraba",
            "codigo" => "13107",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Independencia",
            "codigo" => "13108",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Cisterna",
            "codigo" => "13109",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Florida",
            "codigo" => "13110",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Granja",
            "codigo" => "13111",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Granja",
            "codigo" => "13111",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Pintana",
            "codigo" => "13112",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "La Reina",
            "codigo" => "13113",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Las Condes",
            "codigo" => "13114",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Lo Barnechea",
            "codigo" => "13115",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Lo Espejo",
            "codigo" => "13116",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Lo Prado",
            "codigo" => "13117",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Macul",
            "codigo" => "13118",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Maipú",
            "codigo" => "13119",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Ñuñoa",
            "codigo" => "13120",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Pedro Aguirre Cerda",
            "codigo" => "13121",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Peñalolén",
            "codigo" => "13122",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Providencia",
            "codigo" => "13123",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Pudahuel",
            "codigo" => "13124",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Quilicura",
            "codigo" => "13125",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Quinta Normal",
            "codigo" => "13126",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Recoleta",
            "codigo" => "13127",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Renca",
            "codigo" => "13128",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San Joaquín",
            "codigo" => "13129",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San Miguel",
            "codigo" => "13130",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San Ramón",
            "codigo" => "13131",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Vitacura",
            "codigo" => "13132",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Puente Alto",
            "codigo" => "13201",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Pirque",
            "codigo" => "13202",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San José de Maipo",
            "codigo" => "13203",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Colina",
            "codigo" => "13301",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Lampa",
            "codigo" => "13302",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Tiltil",
            "codigo" => "13303",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San Bernardo",
            "codigo" => "13401",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Buin",
            "codigo" => "13402",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Calera de Tango",
            "codigo" => "13403",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Paine",
            "codigo" => "13404",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Melipilla",
            "codigo" => "13501",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Alhué",
            "codigo" => "13502",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Curacaví",
            "codigo" => "13503",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "María Pinto",
            "codigo" => "13504",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "San Pedro",
            "codigo" => "13505",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Talagante",
            "codigo" => "13601",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "El Monte",
            "codigo" => "13602",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Isla de Maipo",
            "codigo" => "13603",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Padre Hurtado",
            "codigo" => "13604",
            "region_id" => "16"
        ]);
        Comuna::create([
            "nombre" => "Peñaflor",
            "codigo" => "13605",
            "region_id" => "16"
        ]);

    }
}
