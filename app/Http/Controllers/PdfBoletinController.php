<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletin;
use PDF;

class PdfBoletinController extends Controller
{
    //

    public function show(Boletin $boletin)
    {

        //$boletin = Boletin::where('id', '=', $id);
        //dd($boletin->secciones);
        return view('boletines.pdfTemplate', compact([ 'boletin', ]));
    }

    public function exportarPDF(Boletin $boletin)

      {

      
      foreach($boletin->subsecciones as $subseccion)
      {
        foreach($subseccion->macrozonas as $macrozona)
        {
          $arrayMacro[] = $macrozona;
        }
        
      }

      return PDF::loadView('boletines.pdfTemplate', compact([ 'boletin', 'arrayMacro']), [], [
        'format' => 'A4'
      ])->download('invoice.pdf');
// return PDF::loadView('boletines.pdfTemplate',compact([ 'boletin', ]))->download('invoice.pdf');

      }
}
