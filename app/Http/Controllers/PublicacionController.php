<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\Http\Requests\PublicacionStoreRequest;
use App\Http\Requests\PublicacionUpdateRequest;
use App\Region;
use App\Boletin;
use App\Seccion;
use App\Eleccion;
use App\Subseccion;
use App\Macrozona;
use App\Resumen;
use App\Mes;
use App\User;
use File;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleccion = Eleccion::find(1);
        //dd($pubElegida);
        if ($eleccion->publicacion_id != null) {
        $publicacionActual = Publicacion::find($eleccion->publicacion_id);
        $publicaciones = Publicacion::orderBy('año', 'desc')->orderBy('mes_id', 'desc')->get();
        return view('publicaciones.index', compact(['publicaciones', 'pubElegida', 'publicacionActual', ]));
        }else {
        $publicacionActual = (object) array( 'id' => 0, 'mes' => null, 'año' => null);
        $publicaciones = Publicacion::orderBy('año', 'desc')->orderBy('mes_id', 'desc')->get();
        return view('publicaciones.index', compact(['publicaciones', 'pubElegida', 'publicacionActual', ]));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::where('id', '<>', '1')->pluck('name', 'id');
        $regiones[0] = 'Todas las regiones';
        $meses = Mes::pluck('nombre', 'id');
        return view('publicaciones.create', compact(['regiones', 'meses', ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionStoreRequest $request)
    {
        //dd($request['region']);






        //if($request['region'] == 0){//Crear Boletines para todas las regiones
            $publicacion = Publicacion::create($request->all());
            //$path = public_path().'/photos/shares/'.$request->input('año');
            //File::makeDirectory($path, $mode = 0777, true, true);
             $this->crearDirectorios($publicacion);
             $this->crearResumen($publicacion);
            $regiones = Region::where('id', '<>', '1')->get();
            //$secciones = Seccion::get();

            foreach($regiones as $region){
                $boletin = Boletin::create([
                    'region_id' => $region->id,
                    'estado' => 1,
                    'publicacion_id' => $publicacion->id,
                ]);

                $this->crearPortada($boletin, $publicacion);
                $this->sincronizarMacrozonas($boletin, $region);
            }
            /*
        }else{// Crear Boletin para una región
            $publicacion = Publicacion::create($request->all());
            $boletin = Boletin::create([
                'region_id' => $request['region'],
                'estado' => true,
                'publicacion_id' => $publicacion->id,
            ]);
            $secciones = Seccion::get();
            $boletin->secciones()->sync($secciones);
        }
        */

        return redirect()->route('publicaciones.index', $publicacion->id)
            ->with('info', 'Publicación creada con éxito');
    }

    public function crearDirectorios(Publicacion $publicacion)
    {
      if(Publicacion::where([['año', '=', $publicacion->año],['id','<>', $publicacion->id]])->exists())
        {
          $path = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre;
          File::makeDirectory($path, $mode = 0777, true, true);
          $secciones = Seccion::get();
          foreach($secciones as $seccion)
          {
            $pathSeccion = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre.'/'.$seccion->name;
            File::makeDirectory($pathSeccion, $mode = 0777, true, true);

            $pathResumen = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre.'/Resumen Nacional';
            File::makeDirectory($pathResumen, $mode = 0777, true, true);
          }
        }else{
          $pathAño = public_path().'/photos/shares/'.$publicacion->año;
          File::makeDirectory($pathAño, $mode = 0777, true, true);
          $pathMes = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre;
          File::makeDirectory($pathMes, $mode = 0777, true, true);
          $secciones = Seccion::get();
          foreach($secciones as $seccion)
          {
            $pathSeccion = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre.'/'.$seccion->name;
            File::makeDirectory($pathSeccion, $mode = 0777, true, true);
            $pathResumen = public_path().'/photos/shares/'.$publicacion->año.'/'.$publicacion->mes->nombre.'/Resumen Nacional';
            File::makeDirectory($pathResumen, $mode = 0777, true, true);
          }
        }
    }

    public function crearResumen(Publicacion $publicacion)
    {
       $regionesResumen = Region::get();
       $resumen = Resumen::create([
           'publicacion_id' => $publicacion->id,
            ]);
       $resumen->regiones()->sync($regionesResumen);

    }

    public function sincronizarMacrozonas(Boletin $boletin, Region $region)
    {
      $subseccion = Subseccion::create([
                    'seccion_id' => 6,
                    'boletin_id' => $boletin->id,
                ]);
      $macrozonasByRegion = Macrozona::where('region_id', '=', $region->id)->get();
      if($macrozonasByRegion != null){
        $subseccion->macrozonas()->sync($macrozonasByRegion);
      }
    }

    public function crearPortada(Boletin $boletin, Publicacion $publicacion)
    {
      $secciones = Seccion::get();
      $users = User::get();
        $stringUsuarios = '';
        foreach($users as $user)
        {
          $userByRegion = $user->regiones()->wherePivot('region_id', '=', $boletin->region->id)->first();
          if($userByRegion != null)
          {
            $stringUsuarios .= '<span style="font-size: small;"><strong><em>'.$user->name.', '.$user->cargo.', '.$user->cri.'</em></strong></span><br />';
          }

      }
      $portada ='<p style="padding-top: 40px; padding-bottom: 40px;" align="center">
      <span style="color: red; font-size: 24px;">
      <strong><img style="display: block; margin-left: auto; margin-right: auto;" src="../../photos/shares/logo-inia.png" alt="" width="585" height="124" /></strong></span></p>
      <p style="padding-top: 40px; padding-bottom: 40px;" align="center">
      <span style="color: red; font-size: 24px;">
      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>
      <p align="center"><span style="color: red; font-size: 24px;">
      <strong>'.strtoupper($publicacion->mes->nombre).' '.strtoupper($publicacion->año).'</strong></span></p>
      <p align="center">
      <span style="color: black; font-size: 24px;"><strong>REGIÓN DE '.strtoupper($boletin->region->name).'</strong></span></p>
      <p><br /><br /></p>
      <p><span style="font-size: medium; color: green;">
      <strong><em>Autores INIA:</em></strong></span><br />
      '.$stringUsuarios.'
      <p><span style="font-size: medium; color: green;">
      <strong><em>Marcel Fuentes Bustamante, Ing. Civil Agrícola M.Sc, INIA Quilamapu <br />Cristóbal Campos Muñoz, Ing. Civil Agrícola, INIA Quilamapu
      <br />Rubén Ruiz Muñoz, Ing. Civil Agrícola, INIA Quilamapu </em></strong></span></p>
      <p><span style="color: green; font-size: medium;"><strong><em>Coordinador INIA:</em></strong></span><br /><span style="font-size: small;"><strong><em>Claudio Pérez Castillo, Ing. Agr. M.Sc. Ph.D, INIA Kampenaike</em></strong></span></p>';
                $boletin->secciones()->sync($secciones);//sincroniza las secciones con el boletin
                $seccionPortada = $boletin->secciones()//Busca la seccion de portada
                ->wherePivot('boletin_id', '=', $boletin->id)
                ->wherePivot('seccion_id', '=', 1)
                ->first();


                $seccionPortada->pivot->contenido = $portada; //carga el txt de portada a la variable
                $seccionPortada->pivot->save(); //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {

        //dd($publicacion->boletines);
        $boletines = $publicacion->boletines;

        if($publicacion->resumen != null)
        {
            $resumen = $publicacion->resumen;
        }else{
            $resumen = (object) array( 'mes' => '-', 'año' => '-');
        }

        //dd($resumen);
        return view('publicaciones.show', compact(['boletines', 'resumen', ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        $meses = Mes::pluck('nombre', 'id');
        return view('publicaciones.edit', compact(['publicacion', 'meses']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublicacionUpdateRequest $request, $id)
    {

        $publicacion = Publicacion::find($id);
        $publicacion->mes_id = $request->input('mes_id');
        $publicacion->año    = $request->input('año');
        $publicacion->save();

        $boletines = $publicacion->boletines;
        foreach($boletines as  $boletin)
        {

          $this->editarPortada($boletin, $publicacion, $boletin->secciones[0]);
        }

        return redirect()->route('publicaciones.index')
            ->with('info', 'Se ha editado la publicación correctamente');

    }

    public function editarPortada(Boletin $boletin, Publicacion $publicacion, $varPivot)
    {
      $users = User::get();
        $stringUsuarios = '';
        foreach($users as $user)
        {
          $userByRegion = $user->regiones()->wherePivot('region_id', '=', $boletin->region->id)->first();
          if($userByRegion != null)
          {
            $stringUsuarios .= '<span style="font-size: small;"><strong><em>'.$user->name.', '.$user->cargo.', '.$user->cri.'</em></strong></span><br />';
          }

      }
      $portada ='<p style="padding-top: 40px; padding-bottom: 40px;" align="center">
      <span style="color: red; font-size: 24px;">
      <strong><img style="display: block; margin-left: auto; margin-right: auto;" src="../../photos/shares/logo-inia.png" alt="" width="585" height="124" /></strong></span></p>
      <p style="padding-top: 40px; padding-bottom: 40px;" align="center">
      <span style="color: red; font-size: 24px;">
      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>
      <p align="center"><span style="color: red; font-size: 24px;">
      <strong>'.strtoupper($publicacion->mes->nombre).' '.strtoupper($publicacion->año).'</strong></span></p>
      <p align="center">
      <span style="color: black; font-size: 24px;"><strong>REGIÓN DE '.strtoupper($boletin->region->name).'</strong></span></p>
      <p><br /><br /></p>
      <p><span style="font-size: medium; color: green;">
      <strong><em>Autores INIA:</em></strong></span><br />
      '.$stringUsuarios.'
      <p><span style="font-size: medium; color: green;">
      <strong><em>Marcel Fuentes Bustamante, Ing. Civil Agrícola M.Sc, INIA Quilamapu <br />Cristóbal Campos Muñoz, Ing. Civil Agrícola, INIA Quilamapu
      <br />Rubén Ruiz Muñoz, Ing. Civil Agrícola, INIA Quilamapu </em></strong></span></p>
      <p><span style="color: green; font-size: medium;"><strong><em>Coordinador INIA:</em></strong></span><br /><span style="font-size: small;"><strong><em>Claudio Pérez Castillo, Ing. Agr. M.Sc. Ph.D, INIA Kampenaike</em></strong></span></p>';

      $varPivot->pivot->contenido = $portada; //carga el txt de portada a la variable
      $varPivot->pivot->save(); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function vistaElegir(Publicacion $publicacion)
    {
        return view('publicaciones.eleccion', compact(['publicacion', ]));
    }

    public function elegirPublicacion($publicacion)
    {
        //dd($publicacion);
        $eleccionAntigua = Eleccion::findOrFail(1);
        $eleccionAntigua->update(["publicacion_id" => $publicacion]);

        return redirect()->route('publicaciones.index')
            ->with('info', 'Se ha elegido correctamente');
    }

    public function vistaAbrirCerrarBoletines(Publicacion $publicacion)
    {

       return view('publicaciones.abrirCerrar', compact(['publicacion', ]));
    }
    public function cerrarBoletin(Boletin $boletin, $publicacion)
    {
        $boletin->update(["estado" => 0]);
        return redirect()->route('publicaciones.abrirCerrar', $publicacion)
            ->with('info', 'Se ha cerrado correctamente');

    }

    public function abrirBoletin(Boletin $boletin, $publicacion)
    {
         $boletin->update(["estado" => 1]);
        return redirect()->route('publicaciones.abrirCerrar', $publicacion)
            ->with('info', 'Se ha cerrado correctamente');
    }

    public function abrirTodosBoletines(Publicacion $publicacion)
    {
        foreach($publicacion->boletines as $boletin)
        {
            $boletin->update(["estado" => 1]);
        }
        return redirect()->route('publicaciones.abrirCerrar', $publicacion->id)
            ->with('info', 'Se han abierto correctamente los boletines');
    }

    public function cerrarTodosBoletines(Publicacion $publicacion)
    {
        foreach($publicacion->boletines as $boletin)
        {
            $boletin->update(["estado" => 0]);
        }
        return redirect()->route('publicaciones.abrirCerrar', $publicacion->id)
            ->with('info', 'Se ha cerrado correctamente los boletines');
    }

    public function publicHtmlvista()
    {
      $publicaciones = Publicacion::get();
      return view('publicaciones.publicar', compact(['publicaciones']));
    }

    public function habilitarDeshabilitar(Publicacion $publicacion)
    {

      if($publicacion->public == true)
      {
        $publicacion->public = false;
        $publicacion->save();
      return redirect()->route('publichtml.enabledisable')
            ->with('info', 'Se ha deshabilitado correctamente');
      }else{
        $publicacion->public = true;
        $publicacion->save();
      return redirect()->route('publichtml.enabledisable')
            ->with('info', 'Se ha habilitado correctamente');
      }

    }

    public function publicBoletinesVista(Publicacion $publicacion)
    {
      return view('publicaciones.publicarBoletines', compact(['publicacion']));

    }

    public function publicBoletin(Boletin $boletin)
    {

      if($boletin->publico == true)
      {
        $boletin->publico = false;
        $boletin->save();
      return redirect()->route('publichtml.boletines.show', $boletin->publicacion->id)
            ->with('info', 'Se ha deshabilitado correctamente');
      }else{
        $boletin->publico = true;
        $boletin->save();
      return redirect()->route('publichtml.boletines.show', $boletin->publicacion->id)
            ->with('info', 'Se ha habilitado correctamente');
      }
    }

    public function publicBoletinHabilitarTodos(Publicacion $publicacion)
    {
      foreach($publicacion->boletines as $boletin)
        {
            $boletin->publico = true;
            $boletin->save();
        }
      return redirect()->route('publichtml.boletines.show', $publicacion->id)
            ->with('info', 'Se han habilitado todos los boletines');
    }

    public function publicBoletinDeshabilitarTodos(Publicacion $publicacion)
    {
      foreach($publicacion->boletines as $boletin)
        {
            $boletin->publico = false;
            $boletin->save();
        }
      return redirect()->route('publichtml.boletines.show', $publicacion->id)
            ->with('info', 'Se han deshabilitado todos los boletines');
    }
}
