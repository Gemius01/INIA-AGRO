<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\Region;
use App\Boletin;
use App\Seccion;
use App\Eleccion;
use App\Subseccion;
use App\Macrozona;
use App\Resumen;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleccion = Eleccion::find(1);
        //dd($pubElegida);
        if ($eleccion->publicacion_id != null) {
        $publicacionActual = Publicacion::find($eleccion->publicacion_id);
        $publicaciones = Publicacion::orderBy('id', 'desc')->get();
        return view('publicaciones.index', compact(['publicaciones', 'pubElegida', 'publicacionActual', ]));
        }else {
        $publicacionActual = (object) array( 'mes' => '', 'año' => '');  
        $publicaciones = Publicacion::orderBy('id', 'desc')->get();
        return view('publicaciones.index', compact(['publicaciones', 'pubElegida', 'publicacionActual', ]));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::where('id', '<>', '1')->pluck('name', 'id');
        $regiones[0] = 'Todas las regiones';
        return view('publicaciones.create', compact(['regiones', ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['region']);
        if($request['region'] == 0){//Crear Boletines para todas las regiones
            $publicacion = Publicacion::create($request->all());
            $regiones = Region::where('id', '<>', '1')->get();
            $regionesResumen = Region::get();
            $resumen = Resumen::create([
                'publicacion_id' => $publicacion->id,
            ]);
            $resumen->regiones()->sync($regionesResumen);
            foreach($regiones as $region){
                $boletin = Boletin::create([
                    'region_id' => $region->id,
                    'estado' => 1,
                    'publicacion_id' => $publicacion->id,
                ]);
                $secciones = Seccion::get();
                $boletin->secciones()->sync($secciones);
                $subseccion = Subseccion::create([
                    'seccion_id' => 6,
                    'boletin_id' => $boletin->id,
                ]);
                $macrozonasByRegion = Macrozona::where('region_id', '=', $region->id)->get();
                if($macrozonasByRegion != null){
                  $subseccion->macrozonas()->sync($macrozonasByRegion);
                }
                
            }
        }else{// Crear Boletin para una región
            $publicacion = Publicacion::create($request->all());
            $boletin = Boletin::create([
                'region_id' => $request['region'],
                'estado' => true,
                'publicacion_id' => $publicacion->id,
            ]);
            $secciones = Seccion::get();
            $boletin->secciones()->sync($secciones);
        }
        //$publicacion = Publicacion::create($request->all());

        return redirect()->route('publicaciones.index', $publicacion->id)
            ->with('info', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
       
        //dd($publicacion->boletines);
        $boletines = $publicacion->boletines;
        
        if($publicacion->resumen != null)
        {
            $resumen = $publicacion->resumen;
        }else{
            $resumen = (object) array( 'mes' => '-', 'año' => '-');
        }
        
        //dd($resumen);
        return view('publicaciones.show', compact(['boletines', 'resumen', ]));
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

    public function vistaElegir(Publicacion $publicacion)
    {
        return view('publicaciones.eleccion', compact(['publicacion', ]));
    }

    public function elegirPublicacion($publicacion)
    {
        //dd($publicacion);
        $eleccionAntigua = Eleccion::findOrFail(1);
        $eleccionAntigua->update(["publicacion_id" => $publicacion]);

        return redirect()->route('publicaciones.index')
            ->with('info', 'Se ha elegido correctamente');
    }

    public function vistaAbrirCerrarBoletines(Publicacion $publicacion)
    {

       return view('publicaciones.abrirCerrar', compact(['publicacion', ]));
    }
    public function cerrarBoletin(Boletin $boletin, $publicacion)
    {
        $boletin->update(["estado" => 0]);
        return redirect()->route('publicaciones.abrirCerrar', $publicacion)
            ->with('info', 'Se ha cerrado correctamente');

    }

    public function abrirBoletin(Boletin $boletin, $publicacion)
    {
         $boletin->update(["estado" => 1]);
        return redirect()->route('publicaciones.abrirCerrar', $publicacion)
            ->with('info', 'Se ha cerrado correctamente');
    }

    public function abrirTodosBoletines(Publicacion $publicacion)
    {
        foreach($publicacion->boletines as $boletin)
        {
            $boletin->update(["estado" => 1]);
        }
        return redirect()->route('publicaciones.abrirCerrar', $publicacion->id)
            ->with('info', 'Se han abierto correctamente los boletines');
    }

    public function cerrarTodosBoletines(Publicacion $publicacion)
    {
        foreach($publicacion->boletines as $boletin)
        {
            $boletin->update(["estado" => 0]);
        }
        return redirect()->route('publicaciones.abrirCerrar', $publicacion->id)
            ->with('info', 'Se ha cerrado correctamente los boletines');
    }
}
