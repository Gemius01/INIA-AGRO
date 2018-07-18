<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
use App\Seccion;
use App\Macrozona;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function index()
    {
        //$users = User::paginate();
        //$users = User::with('region_id')->paginate(20);
       

        $users = User::with('secciones')->paginate(20);

        //dd($users);
        //$regions = Region::get();
        //return $users;
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $seccions = Seccion::get();
        //$regions = Region::pluck('name', 'id');
        $regions = Region::get();
        $macrozonas = Macrozona::with('rubro')->get();
        //dd($macrozonas);
        return view('users.create', compact([
            'regions', 'roles', 'seccions', 'macrozonas',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'password'  => Hash::make($request['password']),
            'cargo'     => $request['cargo'],
            

        ]);

        //Sincroniza las tablas intermedias de macrozona_user
        $user->regiones()->sync($request->get('regions'));

        //Sincroniza las tablas intermedias de macrozona_user
        $user->macrozonas()->sync($request->get('macrozonas'));

        //Sincroniza las tablas intermedias de role_user
        $user->roles()->sync($request->get('roles'));
        
        //Sincroniza las tablas intermedias de seccion_user
        $user->secciones()->sync($request->get('secciones'));

        $secciones = $request->get('secciones');
        //dd($secciones);
        foreach($secciones as $seccion)
        {
            $permission = Permission::where('slug', 'seccion-'.$seccion)->first();
            $user->permissions()->attach($permission);
        }

        return redirect()->route('users.index', $user->id)
            ->with('info', 'Usuario registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->roles()->get();
        $roles = $user->roles()->get();
        $regiones = $user->regiones()->get();
        $seccions = $user->secciones()->get(); 
        return view('users.show', compact('user', 'roles', 'seccions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$user = User::find($user->id)->secciones;
        $roles = Role::get();
        $regiones = Region::get();
        //$seccions = Seccion::get();
        
        //$checkeds = User::find($user->id)->secciones;
        //return $checkeds;
        return view('users.edit', compact(['user', 'roles', 'regiones', ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $user->roles()->sync($request->get('roles'));

        
        //$user->secciones()->sync($request->get('secciones'));

        $user->regiones()->sync($request->get('regiones'));

        $user->update($request->all());
        //$user->roles()->sync($request->get('seccions'));
        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'Eliminado Correctamente');
    }
    public function vistaMacrozonas(User $user)
    {

        $macrozonasUser = $user->macrozonas;

        $ids = [];
        foreach ($user->regiones as $region) {
        $ids[] = $region['id'];
        }
         $macrozonas = Macrozona::whereIn('region_id', $ids)->get();
         //dd($macrozonas);
    
        //dd($macrozonas);
        return view('users.macrozonas', compact(['user', 'macrozonasUser', 'macrozonas', ]));
    }

    public function agregarMacrozonas(Request $request, User $user)
    {
        //return view('users.macrozonas', compact(['user',]));
        $user->macrozonas()->sync($request->get('macrozonas'));
        return redirect()->route('users.index', $user->id)
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }

    public function vistaSecciones(User $user)
    {
        /*
        $seccionesUser = $user->secciones;

        $ids = [];
        foreach ($user->regiones as $region) {
        $ids[] = $region['id'];
        }
        */
        //$secciones = Macrozona::whereIn('region_id', $ids)->get();
        //dd($macrozonas);
    
        //dd($macrozonas);
        $secciones = Seccion::get();
        $seccionesUser = $user->secciones;
        return view('users.secciones', compact(['user', 'seccionesUser', 'secciones', ]));
    }

    public function agregarSecciones(Request $request, User $user)
    {

        $user->secciones()->sync($request->get('secciones'));

        $secciones = $request->get('secciones');

        $permission = array();
        $i = 0;
        foreach($secciones as $seccion)
        {
            $permisoEncontrado = Permission::where('slug', 'seccion-'.$seccion)->first();
            $permission[$seccion] = array('permission_id' => $permisoEncontrado->id, 'user_id' => $user->id); 
        }

        $user->permissions()->sync($permission);
        return redirect()->route('users.index', $user->id)
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }
}
