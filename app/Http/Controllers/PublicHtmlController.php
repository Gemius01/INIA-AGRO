<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\Boletin;
use App\Resumen;
use PDF;

class PublicHtmlController extends Controller
{
    public function index()
    {
    	$publicaciones = Publicacion::where('public', '=', true)->get();
    	return view('public.publicaciones.index', compact(['publicaciones']));
    }

    public function show($publicacion)
    {
      $publicacion = Publicacion::find(decrypt($publicacion));
    	$boletines = $publicacion->boletines()->where('publico', '=', true)->get();

        if($publicacion->resumen != null)
        {
            $resumen = $publicacion->resumen;
        }else{
            $resumen = (object) array( 'mes' => '-', 'año' => '-');
        }

        return view('public.publicaciones.show', compact(['boletines', 'resumen', ]));
    }

    public function showBoletin($boletin)
    {
      $boletin = Boletin::find(decrypt($boletin));
    	return view('public.boletines.show', compact(['boletin']));
    }

    public function showResumen($resumen)
    {
      $resumen = Resumen::find(decrypt($resumen));
    	return view('public.resumenes.show', compact(['resumen']));
    }

    public function pdfResumen(Resumen $resumen)
    {
    	return PDF::loadView('public.resumenes.publicPDFREsumen', compact([ 'resumen', ]), [], [
        'format' => 'A4'
      ])->download('Resumen ('.$resumen->publicacion->mes->nombre.'-'.$resumen->publicacion->año.').pdf');
    }

    public function pdfBoletin(Boletin $boletin)
    {

      $arrayMacro = array();
      $booleanSeccionMacro = false;
    	foreach($boletin->subsecciones as $subseccion)
          {

            foreach($subseccion->macrozonas as $macrozona)
            {
               if($macrozona->pivot->contenido != null)
                  {
                    $booleanSeccionMacro = true;
                  } 
              $arrayMacro[] = $macrozona;
            }
          }

      return PDF::loadView('public.boletines.publicPDFBoletin', compact([ 'boletin', 'arrayMacro', 'booleanSeccionMacro']), [], [
        'format' => 'A4'
      ])->download(''.$boletin->region->name.'('.$boletin->publicacion->año.'-'.$boletin->publicacion->mes->nombre.')'.'.pdf');
      }
    
}
