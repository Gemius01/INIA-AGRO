<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Mail;
use App\Http\Requests\ColaboradorSendRequest;

class ColaboradorController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $rol = $authUser->roles()->first();
        if($rol->id != 1)
        {
            $regiones = $authUser->regiones()->get();
            if($authUser->regiones()->exists())
            {
                if($authUser->regiones()->first()->id != 1)
                {
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
                }else{
                    $arrayUsers = User::where('id', '<>', 1)->get();
                }
            }else{

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
        try {
        $authUser = Auth::user();
        config(['mail.username' => $request->input('email')]);
        config(['mail.password' => $request->input('password')]);


        $data = array(
                'contenido'     => $request->input('contenido')
        );
        $to = $user->email;
        $toName = $user->name;
        $from = $request->input('email');
        $asunto = $request->input('asunto');
        $contenido = $request->input('contenido');
        Mail::send('mails.emailColaborador', $data,
            function ($message) use ($to, $from, $asunto, $authUser, $toName)
        {

            $message->to($to, $toName)
                    ->subject($asunto);
            $message->from($from, $authUser->name);
        });
        return redirect()->route('colaboradores.index')
            ->with('info', 'Se ha enviado el correo correctamente');

        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->with('info-danger', '<p>No se logró enviar el correo, puede ser debido a : </p><ul><li>1 .- No se ingreso el E-mail o Contraseña de GMAIL</li>
                <li>2 .- No se tiene habilitado el Gmail para enviar correos a través de esta plataforma <a href="/colaborador/guia" target="_blank" >Ver más...</a></li></ul><p>En caso contrario contactar al administrador.</p>'.$e->getMessage());
        }
    }

    public function guia()
    {
        return view('colaboradores.guia');
    }
}
