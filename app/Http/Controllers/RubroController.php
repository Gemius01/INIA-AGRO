<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RubroStoreRequest;
use App\Http\Requests\RubroUpdateRequest;
use App\Rubro;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubros = Rubro::get();
        return view('rubros.index', compact([ 'rubros', ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rubros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubroStoreRequest $request)
    {
      //validar
        $rubro = Rubro::create($request->all());
        return redirect()->route('rubros.index', $rubro->id)
            ->with('info', 'Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rubro $rubro)
    {

        return view('rubros.show', compact(['rubro',]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubro $rubro)
    {
        return view('rubros.edit', compact(['rubro',]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RubroUpdateRequest $request, Rubro $rubro)
    {
      //validar
        $rubro->update($request->all());
        return redirect()->route('rubros.index', $rubro->id)
            ->with('info', 'Rubro Agregado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return back()->with('info', 'Eliminado Correctamente');
    }
}
