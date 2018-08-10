<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use App\Region;

class GraficosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($regionNumero)
    {   
        $url = 'storage/json/es/noticia.json';
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
        //dd($arrayasd);
        /*
        $path = storage_path() . "/inia.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $regiones = json_decode(file_get_contents($path), false);
        //$jsonString = file_get_contents(base_path('resources/lang/en.json'));
        dd($regiones[0].id);
        //$data = json_decode($regiones, false);
        $asdregion = Region::get();
        dd($asdregion);
        
        $arrayVacio = array();
        foreach($regiones as $obj){
           $arrayVacio[] = (object) $obj;
        }
        */
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
