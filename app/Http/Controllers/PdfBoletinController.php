<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletin;
use PDF;
use View;

class PdfBoletinController extends Controller
{
    public function show(Boletin $boletin)
    {

        return view('boletines.pdfTemplate', compact([ 'boletin', ]));
    }

    public function exportarPDF(Boletin $boletin)
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

      return PDF::loadView('boletines.pdfTemplate', compact([ 'boletin', 'arrayMacro', 'booleanSeccionMacro']), [], [
        'format' => 'A4'
      ])->download(''.$boletin->region->name.'('.$boletin->publicacion->año.'-'.$boletin->publicacion->mes->nombre.')'.'.pdf');
    }

   
}
