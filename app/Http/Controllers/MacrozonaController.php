<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MacrozonaStoreRequest;
use App\Http\Requests\MacrozonaUpdateRequest;
use App\Macrozona;
use App\Region;
use App\Rubro;

class MacrozonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('region')){
            $macrozonas = Macrozona::where('region_id', request('region'))->get();
            $regiones = Region::where('id', '<>', 1)->get();
        }else{
           $macrozonas = Macrozona::get();
           $regiones = Region::where('id', '<>', 1)->get();
        }
        //$macrozonas = Macrozona::where('region_id', request('region'))->paginate(10);
            //$regiones = Region::where('id', '<>', 1)->get();
         //$macrozonas = Macrozona::paginate(10);
            //$regiones = Region::where('id', '<>', 1)->get();

        return view('macrozonas.index', compact([ 'macrozonas', 'regiones', ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        //$rubros = Rubro::pluck('name', 'id');
        $rubros = Rubro::get();
        $arrayRubros = array();
        foreach($rubros as $rubro)
        {
           if($rubro->subrubro != null)
           {
            $arrayRubros[$rubro->id] = $rubro->name.' > '.$rubro->subrubro;
           }else{
            $arrayRubros[$rubro->id] = $rubro->name;
           }


        }

        return view('macrozonas.create', compact(['regiones', 'arrayRubros', ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MacrozonaStoreRequest $request)
    {

        $macrozona = Macrozona::create([
            'name'           => $request['name'],
            'region_id'      => $request['region'],
            'rubro_id'       => $request['rubro'],
        ]);

        return redirect()->route('macrozonas.index', $macrozona->id)
            ->with('info', 'Macrozona agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Macrozona $macrozona)
    {
        return view('macrozonas.show', compact(['macrozona', ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Macrozona $macrozona)
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        $rubros = Rubro::pluck('name', 'id');

        return view('macrozonas.edit', compact([ 'macrozona','regiones', 'rubros', ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MacrozonaUpdateRequest $request, Macrozona $macrozona)
    {
        $macrozona->update($request->all());

        return redirect()->route('macrozonas.index')
                    ->with('info', 'Macrozona editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Macrozona $macrozona)
    {
        $macrozona->delete();
        return back()->with('info', 'Macrozona eliminada Correctamente');
    }
}
