<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Http\Requests\RegionStoreRequest;
use App\Http\Requests\RegionUpdateRequest;

class RegionController extends Controller
{
    public function index()
    {
        $regiones = Region::where('id', '<>', 1)->get();

        return view('regiones.index', compact([ 'regiones', ]));
    }

    public function create()
    {
        return view('regiones.create');
    }

    public function store(RegionStoreRequest $request)
    {
        $region = Region::create([
            'name'           => $request['name'],
            'country_id'     => 1,
        ]);

        return redirect()->route('regiones.index', $region->id)
            ->with('info', 'Región Agregada con exito');
    }

    public function show(Region $region)
    {
        return view('regiones.show', compact([ 'region', ]));
    }

    public function edit(Region $region)
    {
        return view('regiones.edit', compact(['region',]));
    }

    public function update(RegionUpdateRequest $request, Region $region)
    {
        $region->update($request->all());

        return redirect()->route('regiones.index', $region->id)
            ->with('info', 'Región editada con exito');
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return back()->with('info', 'Región eliminada Correctamente');
    }
}
