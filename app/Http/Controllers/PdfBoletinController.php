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

      	// $pdf = PDF::loadView('pdfExport/1');
  		  // return $pdf->download('invoice.pdf');

 return PDF::loadView('boletines.pdfTemplate',compact([ 'boletin', ]))->download('invoice.pdf');

      }
}
