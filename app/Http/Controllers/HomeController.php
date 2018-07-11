<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;
use App\Region;
use App\User;
class HomeController extends Controller
{

  public function downloadPDF()

    {

    	$pdf = PDF::loadView('pdfView');

		return $pdf->download('invoice.pdf');

    }
    public function vistaPdf()
    {
        return view('pdfView');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user = Auth::user();
        $blabla = '<h1>fafa</h1>';
        $queryRegion = $user->regiones()->get();
        /*
        if($queryRegion[0]->id === 1){
            $regiones = Region::get();
        }else{
            //$regiones = $user->regiones()->get();
           
            $regiones = $user->regiones()
                     //->select('name')
                     ->where('region_id', '<>', 1)
                     ->get();
        }
        */
        return view('home', compact([ 'blabla', ]));
    }
}
