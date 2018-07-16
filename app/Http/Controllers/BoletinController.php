<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Boletin;
use App\Seccion;
use App\Macrozona;
use File;
use Response;

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

    public function editarSeccion(Boletin $boletin, $seccion)
    {
        $seccionDetail = $boletin->secciones()->where('seccion_id', '=', $seccion)->first();
        //dd($seccionDetail);
        //dd($detalle);
        //$secciones = $detalle->secciones()->get();
        //dd($secciones[0]->pivot);
        
        return view('editor', compact([
             'seccionDetail',
        ]));
    }

    public function guardarEdicion(Request $request) 
    {
       $response = array(
          'status' => 'success',
          'boletin_id' => $request->input('boletin_id'),
          'seccion_id' => $request->input('seccion_id'),
          'contenido' => $request->input('contenido'),
      );
      $boletin = Boletin::find($response['boletin_id']);
      $detail = $boletin->secciones()->where('seccion_id', '=', $response['seccion_id'])->first();
      $detail->pivot->contenido =  $request->input('contenido');
      $detail->pivot->save();
      return $detail; 
      
    }

    public function generarXML(){
        $macrozonas = Macrozona::get();
        $headers = array(
      'Content-Type' => 'text/xml',
    );  
        $content = view('boletines.xml', compact(['macrozonas',]))->render();
        //File::put(storage_path().'/file.xml', $content);
        //return Response::make($content, 200)->header('Content-Type', 'application/xml');
        //return response()->download('boletines.xml', 'filename.xml', $headers);
        //return response()->view('boletines.xml', compact(['macrozonas']))->header('Content-Type', 'text/xml')->download();

        return response()->attachment($content, date('Y-m-d'));
    }
}
