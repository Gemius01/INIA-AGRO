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

    public function index()
    {
        if(request()->has('region')){
            $macrozonas = Macrozona::where('region_id', request('region'))->get();
            $regiones = Region::where('id', '<>', 1)->get();
        }else{
           $macrozonas = Macrozona::get();
           $regiones = Region::where('id', '<>', 1)->get();
        }

        return view('macrozonas.index', compact([ 'macrozonas', 'regiones', ]));
    }

    public function create()
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        $rubros = Rubro::orderBy('name', 'asc')->get();
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

    public function show(Macrozona $macrozona)
    {
        return view('macrozonas.show', compact(['macrozona', ]));
    }

    public function edit(Macrozona $macrozona)
    {
        $regiones = Region::where('id', '<>', 1)->pluck('name', 'id');
        $rubros = Rubro::orderBy('name', 'asc')->get();
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

        return view('macrozonas.edit', compact([ 'macrozona','regiones', 'arrayRubros', ]));
    }

    public function update(MacrozonaUpdateRequest $request, Macrozona $macrozona)
    {
        $macrozona->update($request->all());

        return redirect()->route('macrozonas.index')
                    ->with('info', 'Macrozona editada con exito');
    }

    public function destroy(Macrozona $macrozona)
    {
        $macrozona->delete();
        return back()->with('info', 'Macrozona eliminada Correctamente');
    }
}
