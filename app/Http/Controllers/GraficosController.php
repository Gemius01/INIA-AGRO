<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Region;
use App\Visita;

class GraficosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($regionNumero)
    {   
        $path = storage_path() . "/inia.json";
        $datos = file_get_contents($path);
        $regiones = json_decode($datos, true);

        $arrayasd = array();
        foreach($regiones as $region){
            
           if($region['region']['id'] == $regionNumero)
           {
             return $region;
           }           
        }
        return null;   
    }

    public function dmcData($regionNumero)
    {   
        
        $path = storage_path() . "/dmc.json";
        $datos = file_get_contents($path);
        $regiones = json_decode($datos, true);
        
        $arrayasd = array();
        foreach($regiones as $region){
            
           if($region['region']['id'] == $regionNumero)
           {
             return $region;
           }           
        }
        return null;   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitas()
    {
        $contador = Visita::first();
        $contador->contador += 1;
        $contador->save(); 
        return $contador->contador;
    }

    public function visitasDMC()
    {
        $contador = Visita::find(2);
        $contador->contador +=1;
        $contador->save();
        return $contador->contador;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
