<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RubroStoreRequest;
use App\Http\Requests\RubroUpdateRequest;
use App\Rubro;

class RubroController extends Controller
{
    public function index()
    {
        $rubros = Rubro::orderBy('name', 'asc')->get();
        return view('rubros.index', compact([ 'rubros', ]));
    }
    public function create()
    {
        return view('rubros.create');
    }
    public function store(RubroStoreRequest $request)
    {
        $rubro = Rubro::create($request->all());
        return redirect()->route('rubros.index', $rubro->id)
            ->with('info', 'Agregado con exito');
    }

    public function show(Rubro $rubro)
    {

        return view('rubros.show', compact(['rubro',]));
    }

    public function edit(Rubro $rubro)
    {
        return view('rubros.edit', compact(['rubro',]));
    }

    public function update(RubroUpdateRequest $request, Rubro $rubro)
    {
        $rubro->update($request->all());
        return redirect()->route('rubros.index', $rubro->id)
            ->with('info', 'Rubro Editado con exito');
    }

    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return back()->with('info', 'Eliminado Correctamente');
    }
}
