<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Boletin;
use App\Seccion;

class BoletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletines = Boletin::get();
        return view('boletines.index', compact([
            'boletines',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        $regiones[0] = 'Todas las anteriores';
        
        return view('boletines.create', compact([
            'regiones',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ACA TA EL QUESO
        if($request->region == 0){
            $regionesBD = Region::where('id', '<>', 1)->get();
            $secciones = Seccion::get();
            foreach($regionesBD as $region){
                
              $boletin = Boletin::create([
                    'region_id' => $region->id,
                    'creacion' => $request->fecha,
                ]);
                
            }
        }else {

            $boletin = Boletin::create([
                'region_id' => $request->region,
                'creacion'  => $request->fecha,
            ]);
            $secciones = Seccion::get();
            $boletin->secciones()->sync($secciones);
            /*
            $secciones = Seccion::get();
            foreach($secciones as $seccion){
                    $boletin->secciones()->save([
                        'seccion_id' => $seccion->id,
                        'boletin_id' => $boletin->id,
                    ]);
            }
            */

        }

        return redirect()->route('boletines.index')
            ->with('info', 'boletín(es) creado(s) con exito');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Boletin $boletin)
    {

        //$boletin = Boletin::where('id', '=', $id);
        //dd($boletin->secciones);
        return view('boletines.show', compact([ 'boletin', ]));
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

    public function editarSeccion()
    {
        return view('editor');
    }
}
