<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Region;
use App\Boletin;
use App\Seccion;
use App\Macrozona;
use App\Publicacion;
use App\User;
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
        $user = Auth::user();
        $rol = $user->roles()->first();
        return view('boletines.show', compact([ 'boletin', 'rol']));
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
        $seccionDetail = $boletin->secciones()->where('seccion_id', '=', decrypt($seccion))->first();
        //dd($seccionDetail);
        //dd($detalle);
        //$secciones = $detalle->secciones()->get();
        //dd($secciones[0]->pivot);

        return view('editor', compact([
             'seccionDetail', 'boletin',
        ]));
    }

    public function guardarEdicion(Request $request)
    {
       //dd('asd');
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
      return '/boletines/'.$request->input('boletin_id');

    }

    public function editarSeccionMacrozona(Boletin $boletin, $subseccion, $macrozona)
    {

        //Arreglar a una manera mas optima
        //$macrozona = $boletin->subsecciones[0]->macrozonas;
        //$detalleMacrozona = $macrozona[1]->pivot->;

        $subsecciones = $boletin->subsecciones()->first();
        $detalleMacrozona = $subsecciones->macrozonas()
        ->wherePivot('macrozona_id', '=', $macrozona)
        ->wherePivot('subseccion_id', '=', $subseccion)
        ->first();
        //$detalleMacrozona = $busquedaMacro->pivot;
        //$asd3 = $asd2->pivot;
        //$asd =$subsecciones->macrozonas()->wherePivot('macrozona_id', '=', $macrozona)->first();

        /*
        [0]->pivot
        ->where([
            ['macrozona_id', '=', $macrozona],
            ['subseccion_id', '=', $subseccion]
        ])->first();
        */

        return view('editorMacrozona', compact([
             'detalleMacrozona', 'boletin',
        ]));
    }

    public function guardarEdicionMacrozona(Request $request)
    {
       //dd('asd');
        //return $request;

       $response = array(
          'boletin_id' => $request->input('boletin_id'),
          'subseccion_id' => $request->input('subseccion_id'),
          'macrozona_id' => $request->input('macrozona_id'),
          'contenido' => $request->input('contenido'),
      );
      $boletin = Boletin::find($response['boletin_id']);
      $subsecciones = $boletin->subsecciones()->first();


      $detail = $subsecciones->macrozonas()
        ->wherePivot('macrozona_id', '=', $request->input('macrozona_id'))
        ->wherePivot('subseccion_id', '=', $request->input('subseccion_id'))
        ->first();



      $detail->pivot->contenido =  $request->input('contenido');
      $detail->pivot->save();

      return '/boletines/'.$request->input('boletin_id');

    }

    public function guardarEdicionMacrozonaResumen(Request $request, User $user)
    {
       //dd('asd');
        //return $request;
       $user = Auth::user();
       $response = array(
          'boletin_id' => $request->input('boletin_id'),
          'subseccion_id' => $request->input('subseccion_id'),
          'macrozona_id' => $request->input('macrozona_id'),
          'resumen' => $request->input('resumen'),
      );
      $boletin = Boletin::find($response['boletin_id']);
      $subsecciones = $boletin->subsecciones()->first();


      $detail = $subsecciones->macrozonas()
        ->wherePivot('macrozona_id', '=', $request->input('macrozona_id'))
        ->wherePivot('subseccion_id', '=', $request->input('subseccion_id'))
        ->first();



      $detail->pivot->resumen =  $request->input('resumen');
      $detail->pivot->autor = $user->name;
      $detail->pivot->email = $user->email;
      $detail->pivot->save();

      return '/boletines/'.$request->input('boletin_id');


    }

    public function generarXML(Publicacion $publicacion){

        $boletines = $publicacion->boletines;
        $array = array();
        foreach($boletines as $boletin)
        {
            /*
            $seccion = $boletin->secciones()
            ->where([
                ['boletin_id', '=', $boletin->id],
                ['seccion_id', '=', 6],
            ])
            ->first();
            */
            $subsecciones = $boletin->subsecciones()->first();


            $macrozonas = $subsecciones->macrozonas()->get();
            foreach($macrozonas as $macrozona)
            {
                //if($macrozona == null)
                $array[] = $macrozona;
            }
            //$array[] = $seccion->subsecciones->macrozonas();

        }
        //dd($array);

        $macrozonas = Macrozona::get();

        $headers = array(
      'Content-Type' => 'text/xml',
    );
        $content = view('boletines.xml', compact(['array', 'publicacion', ]))->render();
        //File::put(storage_path().'/file.xml', $content);
        //return Response::make($content, 200)->header('Content-Type', 'application/xml');
        //return response()->download('boletines.xml', 'filename.xml', $headers);
        //return response()->view('boletines.xml', compact(['macrozonas']))->header('Content-Type', 'text/xml')->download();

        return response()->attachment($content, date('Y-m-d'));

    }
}
