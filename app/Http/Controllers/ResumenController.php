<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resumen;

class ResumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resumen $resumen)
    {
        
        return view('resumenes.show',  compact(['resumen', ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function vistaSeccionResumen(Resumen $resumen, $region)
    {
        $seccionDetail = $resumen->regiones()->where('region_id', '=', $region)->first();
        return view('editorResumen', compact([
             'seccionDetail',
        ]));
    }

    public function guardarEdicion(Request $request) 
    {
       //dd('asd');
       $response = array(
          
          'region_id' => $request->input('region_id'),
          'resumen_id' => $request->input('resumen_id'),
          'contenido' => $request->input('contenido'),
      );
      $resumen = Resumen::find($response['resumen_id']);
      $detail = $resumen->regiones()->where('region_id', '=', $response['region_id'])->first();
      $detail->pivot->contenido =  $request->input('contenido');
      $detail->pivot->save();
      return '/resumen/'.$request->input('resumen_id'); 

     
    }
}
