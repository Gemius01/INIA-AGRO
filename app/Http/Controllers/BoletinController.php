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
    
    public function index()
    {
        $boletines = Boletin::get();
        return view('boletines.index', compact([
            'boletines',
        ]));
    }

    
    public function create()
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        $regiones[0] = 'Todas las anteriores';

        return view('boletines.create', compact([
            'regiones',
        ]));
    }

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

        }

        return redirect()->route('boletines.index')
            ->with('info', 'boletín(es) creado(s) con exito');
    }

    public function show($idBoletin)
    {

      $boletin = Boletin::find(decrypt($idBoletin));

        $user = Auth::user();
        $rol = $user->roles()->first();
        return view('boletines.show', compact([ 'boletin', 'rol']));
    }

    public function editarSeccion($idBoletin, $seccion)
    {
        
        $boletin = Boletin::find(decrypt($idBoletin));
        $seccionDetail = $boletin->secciones()->where('seccion_id', '=', decrypt($seccion))->first();
        //dd($seccionDetail->pivot->editando);
        
        $seccionDetail->pivot->editando = 1;
        
        $seccionDetail->pivot->save();
        //dd($seccionDetail->pivot);
        $user = Auth::user()->roles()->first()->id;

        $dirname = '../public/photos/shares/'.$boletin->publicacion->año.'/'.
                                      $boletin->publicacion->mes->nombre.'/'.$boletin->region->name.'/'.$seccionDetail->name.'/';
        $images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);
        $arrayImages = array();
        foreach($images as $image) {
            $rest = substr($image, 10);
            $arrayImages[] = '<img src="../../'.$rest.'" alt="" style="width: 100%;height: 190px" />';
        }
        return view('editor', compact([
             'seccionDetail', 'boletin', 'arrayImages', 'dirname', 'user',
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
        return '/boletines/'.encrypt($request->input('boletin_id'));
    }

    public function editarSeccionMacrozona($idBoletin, $subseccion, $macrozona)
    {
        $user = Auth::user()->roles()->first()->id;
        $boletin = Boletin::find(decrypt($idBoletin));
        
        $dirname = '../public/photos/shares/'.$boletin->publicacion->año.'/'.
                                      $boletin->publicacion->mes->nombre.'/'. $boletin->region->name.
                                      '/Análisis de Posibles Riesgos Agroclimáticos en los Principales Rubros Agrícolas/';
        $images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);
        $arrayImages = array();

        foreach($images as $image) {
            $rest = substr($image, 10);
            $arrayImages[] = '<img src="../../../'.$rest.'" alt="" style="width: 100%;height: 190px" />';
        }
        
        $subsecciones = $boletin->subsecciones()->first();
        $detalleMacrozona = $subsecciones->macrozonas()
        ->wherePivot('macrozona_id', '=', decrypt($macrozona))
        ->wherePivot('subseccion_id', '=', decrypt($subseccion))
        ->first();
        $detalleMacrozona->pivot->editando = 1;
        $detalleMacrozona->pivot->save();
        
        return view('editorMacrozona', compact([
             'detalleMacrozona', 'boletin', 'arrayImages', 'dirname', 'user',
        ]));
    }

    public function guardarEdicionMacrozona(Request $request)
    {
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

    public function generarXML(Publicacion $publicacion)
    {
        $boletines = $publicacion->boletines;
        $array = array();
        foreach($boletines as $boletin)
        {
            $subsecciones = $boletin->subsecciones()->first();
            $macrozonas = $subsecciones->macrozonas()->get();
            foreach($macrozonas as $macrozona)
            {
                $array[] = $macrozona;
            }
        }

        $macrozonas = Macrozona::get();
        $headers = array(
          'Content-Type' => 'text/xml',
        );
        $content = view('boletines.xml', compact(['array', 'publicacion', ]))->render();
        return response()->attachment($content, date('Y-m-d'));
    }

    public function salirSeccion(Request $request)
    {
        
        
        $boletin = Boletin::find($request->boletin_id);
        $seccionDetail = 1;
        $seccionDetail = $boletin->secciones()->wherePivot("id", "=", $request->seccion_id)->first();
        
        $seccionDetail->pivot->editando = false;
        
        $seccionDetail->pivot->save();
        
       
        return $seccionDetail->pivot;
    }

    public function salirMacrozona($boletin, $subseccion, $macrozona)
    {
        $boletin = Boletin::find($boletin);
        
        $subsecciones = $boletin->subsecciones()->first();
        $detalleMacrozona = $subsecciones->macrozonas()
        ->wherePivot('macrozona_id', '=', $macrozona)
        ->wherePivot('subseccion_id', '=', $subseccion)
        ->first();
        
        
        
        $detalleMacrozona->pivot->editando = 0;
        
        $detalleMacrozona->pivot->save();

        //return $seccionDetail->pivot;
    }
}
