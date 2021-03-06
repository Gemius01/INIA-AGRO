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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $user = Auth::user();
        $rol = $user->roles()->first();
        $nacional = $user->regiones()->first();
        
        if($rol != null) {
            if($nacional != null)
            {
                if($rol->id != 1 and $nacional->id != 1)
                {

                    $queryRegion = $user->regiones()->pluck('region_id');
                    $publicacionElegida = Eleccion::find(1);
                    if($publicacionElegida != null && $publicacionElegida->publicacion_id != null){

                    $publicacion = Publicacion::find($publicacionElegida->publicacion_id);
                    $boletines = $publicacion->boletines;


                    $userBoletines = $boletines->whereIn('region_id', $queryRegion);
                    $resumen = $publicacion->resumen;
                    //dd($resumen);
                    return view('home', compact([ 'userBoletines', 'resumen', 'rol' ]));
                    } else {
                        $resumen = [];
                        $userBoletines = [];
                        return view('home', compact([ 'userBoletines', 'resumen', 'rol' ]));
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
                    return view('home', compact([ 'userBoletines', 'resumen', 'rol' ]));
                    }else
                    {
                        $resumen = [];
                        $userBoletines = [];
                        return view('home', compact(['resumen', 'userBoletines', 'rol']));
                    }
                }
            }else{
                $publicacionElegida = Eleccion::find(1);
                    $publicacion = Publicacion::find($publicacionElegida->publicacion_id);
                    if($publicacion != null)
                    {
                    $boletines = $publicacion->boletines;

                    $queryRegion = Region::where('id', '<>', '1')->pluck('id');

                    $userBoletines = $boletines->whereIn('region_id', $queryRegion);

                    $resumen = $publicacion->resumen;
                    return view('home', compact([ 'userBoletines', 'resumen', 'rol' ]));
                    }else
                    {
                        $resumen = [];
                        $userBoletines = [];
                        return view('home', compact(['resumen', 'userBoletines', 'rol']));
                    }
            }
        }else{
            
            $resumen = [];
            $userBoletines = [];
            return view('home', compact(['resumen', 'userBoletines', 'rol']));
        }
        
    }
}
