<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Resumen;
use PDF;

class ResumenController extends Controller
{
    public function show($idresumen)
    {
        $resumen = Resumen::find(decrypt($idresumen));
        $user = Auth::user();
        $rol = $user->roles()->first();
        if($rol != null){

            return view('resumenes.show',  compact(['resumen', 'rol' ]));
        }else
        {
            $rol = [];
            return view('resumenes.show',  compact(['resumen', 'rol' ]));
        }
    }

    public function vistaSeccionResumen($idresumen, $region)
    {
        $resumen = Resumen::find(decrypt($idresumen));
        $dirname = '../public/photos/shares/'.$resumen->publicacion->año.'/'.$resumen->publicacion->mes->nombre.'/Resumen Nacional/';
        $images = glob($dirname."*.{jpg,gif,png}",GLOB_BRACE);
        $arrayImages = array();

        foreach($images as $image) 
        {
            $rest = substr($image, 10);
            $arrayImages[] = '<img src="../../'.$rest.'" alt="" style="width: 100%;height: 190px" />';
        }

        $seccionDetail = $resumen->regiones()->where('region_id', '=', decrypt($region))->first();
        return view('editorResumen', compact([
             'seccionDetail', 'resumen', 'arrayImages', 'dirname',
        ]));
    }

    public function guardarEdicion(Request $request)
    {
       $response = array(

          'region_id' => $request->input('region_id'),
          'resumen_id' => $request->input('resumen_id'),
          'contenido' => $request->input('contenido'),
      );
      $resumen = Resumen::find($response['resumen_id']);
      $detail = $resumen->regiones()->where('region_id', '=', $response['region_id'])->first();
      $detail->pivot->contenido =  $request->input('contenido');
      $detail->pivot->save();
      return '/resumen/'.encrypt($request->input('resumen_id'));
    }

    public function descargarPDF(Resumen $resumen)
    {
        return PDF::loadView('resumenes.pdfResumenTemplate', compact([ 'resumen', ]), [], [
        'format' => 'A4'
      ])->download('invoice.pdf');
    }
}
