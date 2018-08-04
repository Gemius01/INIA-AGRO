<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Mail;
use App\Http\Requests\ColaboradorSendRequest;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authUser = Auth::user();
        $rol = $authUser->roles()->first();
        if($rol->id != 1)
        {
            $regiones = $authUser->regiones()->get();
            $arrayUsers = array();
            $usuarios = User::where('id', '<>', 1)->get();
            foreach($regiones as $region)
            {
                foreach($usuarios as $usuario)
                {
                    $userEncontrado = $usuario->regiones()->where('region_id', '=', $region->id)->first();
                    if($userEncontrado != null){
                        $arrayUsers[$usuario->id] = $usuario;
                    }else{

                    }

                }
            }

            return view('colaboradores.index', compact(['arrayUsers', 'regiones']));
        }else{
            $arrayUsers = User::where('id', '<>', 1)->get();
            $regiones[] = (object) array('name' => 'Todas');
            return view('colaboradores.index', compact(['arrayUsers', 'regiones']));
        }
    }

    public function email($idUser)
    {
      $user = User::find(decrypt($idUser));
        return view('colaboradores.send', compact(['user']));
    }

    public function send(ColaboradorSendRequest $request, $idUser)
    {
      $user = User::find(decrypt($idUser));
        //Config para la persona que enviará el mail
        //$data = array('contenido' => $request->input('contenido'));
        try {
        $authUser = Auth::user();
        config(['mail.username' => $request->input('email')]);
        config(['mail.password' => $request->input('password')]);


        $data = array(
                'contenido'     => $request->input('contenido')
        );
        $to = $user->email;
        $from = $request->input('email');
        $asunto = $request->input('asunto');
        $contenido = $request->input('contenido');
        Mail::send('mails.emailcolaborador', $data,
            function ($message) use ($to, $from, $asunto, $authUser)
        {

            $message->to($to, 'Artisans Web')
                    ->subject($asunto);
            $message->from($from, $authUser->name);
        });
        return redirect()->route('colaboradores.index')
            ->with('info', 'Se ha enviado el correo correctamente');

        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('info-danger', '<p>No se logró enviar el correo, puede ser debido a : </p><ul><li>1 .- No se ingreso el E-mail o Contraseña de GMAIL</li>
                <li>2 .- No se tiene habilitado el Gmail para enviar correos a través de esta plataforma <a href="#" target="_blank">Ver más...</a></li></ul>');
            //return json_encode([ 'info-danger' => 'ocurrio un error' ]);
            /*
            return redirect()->route('user.email', $colaborador->id)
            ->with('info-danger', '<p>No se logró enviar el correo, puede ser debido a : </p>');
            */
        }
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
    public function show($id)
    {
        //
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
}
