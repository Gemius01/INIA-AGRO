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

    public function show(Publicacion $publicacion)
    {
    	$boletines = $publicacion->boletines()->where('publico', '=', true)->get();

        if($publicacion->resumen != null)
        {
            $resumen = $publicacion->resumen;
        }else{
            $resumen = (object) array( 'mes' => '-', 'año' => '-');
        }

        return view('public.publicaciones.show', compact(['boletines', 'resumen', ]));
    }

    public function showBoletin(Boletin $boletin)
    {
    	return view('public.boletines.show', compact(['boletin']));
    }

    public function showResumen(Resumen $resumen)
    {
    	return view('public.resumenes.show', compact(['resumen']));
    }

    public function pdfResumen(Resumen $resumen)
    {
    	return PDF::loadView('public.resumenes.publicPDFREsumen', compact([ 'resumen', ]), [], [
        'format' => 'A4'
      ])->download('invoice.pdf');
    }

    public function pdfBoletin(Boletin $boletin)
    {
    	foreach($boletin->subsecciones as $subseccion)
      {
        foreach($subseccion->macrozonas as $macrozona)
        {
          $arrayMacro[] = $macrozona;
        }
      }

      return PDF::loadView('public.boletines.publicPDFBoletin', compact([ 'boletin', 'arrayMacro']), [], [
        'format' => 'A4'
      ])->download('invoiceee.pdf');
      }
    
}
