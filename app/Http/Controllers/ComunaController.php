<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comuna;
use App\Region;
use App\Macrozona;
use App\Publicacion;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunas = Comuna::get();
        return view('comunas.index', compact([ 'comunas' ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        return view('comunas.create', compact(['regiones']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comuna = Comuna::create($request->all());

        return redirect()->route('comunas.index', $macrozona->id)
        ->with('info', 'Comuna agregada con exito'); 
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
        $comuna = Comuna::find($id)->first();
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        return view('comunas.edit', compact(['comuna', 'regiones']));
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
        $comuna = Comuna::find($id)->first();
        $comuna->update($request->all());

        return redirect()->route('comunas.index', $comuna->id)
            ->with('info', 'Comuna editada con exito');
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

    public function macrozonas(Comuna $comuna)
    {

        $macrozonas = Macrozona::where('region_id', '=', $comuna->region_id)->get();
        $macrozonasComuna = $comuna->macrozonas()->get();
        
        return view('comunas.macrozonas',compact(['comuna', 'macrozonas', 'macrozonasComuna']));
    }

    public function macrozonasStore(Request $request, Comuna $comuna)
    {
        $macrozonas = array();
        foreach($request->input('macrozonas') as $macrozona)
            {
                
                //$permisoEncontrado = Permission::where('slug', 'seccion-'.$seccion)->first();
                $macrozonas[] = array('comuna_id' => $comuna->id, 'macrozona_id' => $macrozona);
            }
        $comuna->macrozonas()->sync($macrozonas);
        return redirect()->route('comunas.index', $comuna->id)
            ->with('info', 'Macrozonas asignadas correctamente');

    }

    public function verComuna($cod_comuna)
    {
        $comuna = Comuna::where("codigo","=", $cod_comuna)->first();
        $macrozonas = $comuna->macrozonas()->get();
        $publicacion = Publicacion::where("public", "=", true)->orderBy('año', 'desc')->orderBy('mes_id', 'desc')->first();
        $boletin = $publicacion->boletines()->where("region_id","=", $comuna->region_id)->first();
        $subsecciones = $boletin->subsecciones[0]->macrozonas;
        $recomendaciones = array();
        //dd($subsecciones = $boletin->subsecciones[0]->macrozonas);
        foreach($macrozonas as $macrozona)
        {
            foreach($subsecciones as $subseccion)
            {
                if($subseccion->id == $macrozona->id)
                {
                    $recomendaciones[] = $subseccion;
                }
            }
        }
        
        return view('comunas.publicComuna', compact(['comuna', 'macrozonas', 'recomendaciones']));
    }
}
