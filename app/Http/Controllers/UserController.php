<?php

namespace App\Http\Controllers;

use App\User;
use App\Region;
use App\Seccion;
use App\Macrozona;
use Mail;
use App\Mail\CreateUser;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserContraseñaRequest;
use App\Http\Requests\UserEditByUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function setEnvironmentValue($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        $oldValue = strtok($str, "{$envKey}=");

        $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}\n", $str);

        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
    }

    public function index()
    {
        //$users = User::paginate();
        //$users = User::with('region_id')->paginate(20);


        $users = User::where('id', '<>', 1)->with('secciones')->get();

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
    public function store(UserStoreRequest $request)
    {

        $authUser = Auth::user();
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
        config(['mail.username' => 'pablo.gmeio0123@gmail.com']);
        config(['mail.password' => 'pablomundo2']);
        try {
        Mail::send('mails.mail', $data, function($message) {
            $message->to('pablo.gemio01@gmail.com', 'Artisans Web')
                    ->subject('Artisans Web Testing Mail');
            $message->from('pablo.gmeio0123@gmail.com','Sajid Sayyad');
        });
        }
        catch (\Exception $e) {
        $user = User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'cri'       => $request['cri'],
            'password'  => Hash::make($request['password']),
            'cargo'     => $request['cargo'],
        ]);

        //\Mail::to('pablo.gemio01@gmail.com')->send(new CreateUser);
        //Sincroniza las tablas intermedias de macrozona_user
        $user->regiones()->sync($request->get('regions'));

        //Sincroniza las tablas intermedias de macrozona_user
        $user->macrozonas()->sync($request->get('macrozonas'));

        //Sincroniza las tablas intermedias de role_user
        $user->roles()->sync($request->get('roles'));

        //Sincroniza las tablas intermedias de seccion_user
        $user->secciones()->sync($request->get('secciones'));

        $secciones = $request->get('secciones');

        if($secciones != null)
        {

            foreach($secciones as $seccion)
                {
                    $permission = Permission::where('slug', 'seccion-'.$seccion)->first();
                    $user->permissions()->attach($permission);
                }

        }

        return redirect()->route('users.index', $user->id)
            ->with('info', 'No se envió el correo '.$e->getMessage());
        }

        $user = User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'cri'       => $request['cri'],
            'password'  => Hash::make($request['password']),
            'cargo'     => $request['cargo'],


        ]);

        //\Mail::to('pablo.gemio01@gmail.com')->send(new CreateUser);
        //Sincroniza las tablas intermedias de macrozona_user
        $user->regiones()->sync($request->get('regions'));

        //Sincroniza las tablas intermedias de macrozona_user
        $user->macrozonas()->sync($request->get('macrozonas'));

        //Sincroniza las tablas intermedias de role_user
        $user->roles()->sync($request->get('roles'));

        //Sincroniza las tablas intermedias de seccion_user
        $user->secciones()->sync($request->get('secciones'));

        $secciones = $request->get('secciones');

        if($secciones != null)
        {

            foreach($secciones as $seccion)
                {
                    $permission = Permission::where('slug', 'seccion-'.$seccion)->first();
                    $user->permissions()->attach($permission);
                }

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
    public function show($idUser)
    {
        $user = User::find(decrypt($idUser));
        $user->roles()->get();
        $roles = $user->roles()->get();
        $regiones = $user->regiones()->get();
        $seccions = $user->secciones()->get();
        $macrozonas = $user->macrozonas()->get();
        return view('users.show', compact('user', 'roles', 'seccions', 'regiones', 'macrozonas'));
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
    public function update(UserUpdateRequest $request, User $user)
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
        
        if($user->regiones()->first()->id != 1)
        {
        $ids = [];
        foreach ($user->regiones as $region) {
        $ids[] = $region['id'];
        }
        $macrozonas = Macrozona::whereIn('region_id', $ids)->orderBy('region_id', 'asc')->get();
        }else
        {
          
          $macrozonas = Macrozona::orderBy('region_id', 'asc')->get();
        }
         
         //dd($macrozonas);

        //dd($macrozonas);
        return view('users.macrozonas', compact(['user', 'macrozonasUser', 'macrozonas', ]));
    }

    public function agregarMacrozonas(Request $request, User $user)
    {
        //return view('users.macrozonas', compact(['user',]));
        $user->macrozonas()->sync($request->get('macrozonas'));
        $permission = array();
        $macrozonas = $request->get('macrozonas');
        $secciones = $user->secciones()->pluck('seccion_id');
        //dd($secciones);
        if($secciones != null)
        {
            foreach($secciones as $seccion)
            {
               $permisoEncontrado = Permission::where('slug', 'seccion-'.$seccion)->first();
               $permission[] = array('permission_id' => $permisoEncontrado->id, 'user_id' => $user->id);
            }
        }
        if($macrozonas !=null)
        {
            foreach($macrozonas as $macrozona)
            {
                $permisoEncontrado = Permission::where('slug', 'macrozona-'.$macrozona)->first();
                $permission[] = array('permission_id' => $permisoEncontrado->id, 'user_id' => $user->id);
            }
        }
        $user->permissions()->sync($permission);
        return redirect()->route('users.index', $user->id)
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }

    public function vistaSecciones(User $user)
    {

        $secciones = Seccion::get();
        $seccionesUser = $user->secciones;
        return view('users.secciones', compact(['user', 'seccionesUser', 'secciones', ]));
    }

    public function agregarSecciones(Request $request, User $user)
    {

        $user->secciones()->sync($request->get('secciones'));

        $secciones = $request->get('secciones');

        $permission = array();
        $macrozonas = $user->macrozonas()->pluck('macrozona_id');
        if($macrozonas != null)
        {
            foreach($macrozonas as $macrozona)
            {
                $permisoEncontrado = Permission::where('slug', 'macrozona-'.$macrozona)->first();
                $permission[] = array('permission_id' => $permisoEncontrado->id, 'user_id' => $user->id);
            }
        }
        if($secciones != null)
        {
            foreach($secciones as $seccion)
            {
                $permisoEncontrado = Permission::where('slug', 'seccion-'.$seccion)->first();
                $permission[] = array('permission_id' => $permisoEncontrado->id, 'user_id' => $user->id);
            }
        }
        $user->permissions()->sync($permission);
        return redirect()->route('users.index', $user->id)
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }

    public function cambiarContraseñaVista(User $user)
    {
        return view('users.password', compact(['user']));
    }

    public function cambiarContraseña(UserContraseñaRequest $request, User $user)
    {
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect()->route('users.index', $user->id)
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }

    public function showByUser($idUser)
    {
        $user = User::find(decrypt($idUser));
        $rol = $user->roles()->first();
        $regiones = $user->regiones()->get();
        $seccions = $user->secciones()->get();
        $macrozonas = $user->macrozonas()->get();
        return view('users.showByUser', compact(['user', 'regiones', 'seccions', 'macrozonas', 'rol']));
    }

    public function editByUserView($idUser)
    {
        $user = User::find(decrypt($idUser));
        return view('users.editByUser', compact(['user']));
    }

    public function editByUser($idUser, UserEditByUserRequest $request)
    {
      $user = User::find(decrypt($idUser));
        $user->update($request->all());

        return redirect()->route('users.editByUser', encrypt($user->id))
            ->with('info', 'Se ha actualizado el usuario '.$user->name);
    }

    public function editPasswordByUserVista($idUser)
    {
      $user = User::find(decrypt($idUser));
        return view('users.editPasswordByNormalUser', compact(['user']));
    }

    public function editPasswordByUser(UserContraseñaRequest $request, $idUser)
    {
        $user = User::find(decrypt($idUser));
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect()->route('users.editByUser',  encrypt($user->id))
            ->with('info', 'Se ha actualizado correctamente la contraseña');
    }
}
