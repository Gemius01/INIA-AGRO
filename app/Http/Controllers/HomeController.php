<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;
use App\Region;
use App\User;
use App\Publicacion;
use App\Eleccion;
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
        $rol = $user->roles()->first();
        if($rol != null) {
            if($rol->id != 1 )
            {

                $queryRegion = $user->regiones()->pluck('region_id');
                $publicacionElegida = Eleccion::find(1);
                if($publicacionElegida != null && $publicacionElegida->publicacion_id != null){

                $publicacion = Publicacion::find($publicacionElegida->publicacion_id);
                $boletines = $publicacion->boletines;


                $userBoletines = $boletines->whereIn('region_id', $queryRegion);
                $resumen = $publicacion->resumen;
                //dd($resumen);
                return view('home', compact([ 'userBoletines', 'resumen' ]));
                } else {
                    $userBoletines = [];
                    return view('home', compact([ 'userBoletines', ]));
                }

            }else{

                //Lo que se le mostrará al administrador
                $publicacionElegida = Eleccion::find(1);
                $publicacion = Publicacion::find($publicacionElegida->publicacion_id);
                if($publicacion != null)
                {
                $boletines = $publicacion->boletines;

                $queryRegion = Region::where('id', '<>', '1')->pluck('id');

                $userBoletines = $boletines->whereIn('region_id', $queryRegion);

                $resumen = $publicacion->resumen;
                return view('home', compact([ 'userBoletines', 'resumen' ]));
                }else
                {
                    $resumen = [];
                    $userBoletines = [];
                    return view('home', compact(['resumen', 'userBoletines']));
                }
            }
        }else{
            $resumen = [];
            $userBoletines = [];
            return view('home', compact(['resumen', 'userBoletines']));
        }
        
    }
}
