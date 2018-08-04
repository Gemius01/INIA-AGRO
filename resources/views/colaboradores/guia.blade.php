@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <strong>
                    Guía paso a paso para configurar su GMAIL
                  </strong>
                </div>
                <div class="card-body">
                  <h5><strong>PASO N°1</strong></h5>
                  
                  <p>Acceda a su cuenta de GMAIL ingresando su Correo electrónico y contraseña 
                    (Link: <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&passive=1209600&osid=1&continue=https%3A%2F%2Fmyaccount.google.com%2Fintro&followup=https%3A%2F%2Fmyaccount.google.com%2Fintro&csig=AF-SEna8r_xT3YdqllII%3A1533418812&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">www.gmail.com</a>)</p>
                  <!-- imagen login -->
                  <center>
                  <img src="{{ asset('guia/Log GMAIL.png')}}" width="500px" height="500px" />
                  </center>
                  <hr>
                  <h5><strong>PASO N°2</strong></h5>
                  
                  <p>Dar clickear en el botón de su perfil ubicado en la esquina superior derecha</p>
                  <!-- imagen botón perfil -->
                  <center>
                  <img src="{{ asset('guia/perfil.png')}}" width="100%"  />
                  </center>
                  <p>Luego dar click en el botón "Cuenta Google" o "Google Account"</p>
                  <center>
                  <img src="{{ asset('guia/cuenta google.png')}}" width="100%"  />
                  </center>
                  <hr>
                  <h5><strong>PASO N°3</strong></h5>
                  
                  <p>Clickear en el botón "Sign-in & Security"</p>
                  <!-- imagen botón opción seguridad y aplicaciones -->
                  <img src="{{ asset('guia/Sign-in security.png')}}" width="100%"  />
                  <hr>
                  <h5><strong>PASO N°4</strong></h5>
                  
                  <p>Bajar hasta llegar hasta la opción "Allow less secure apps" o "Habilitar aplicaciones menos seguras" y dejarlo habilitado como se muestra en la imagen</p>
                  <!-- imagen botón nombre de la opcion -->
                  <img src="{{ asset('guia/on.png')}}" width="100%"  />
                  <hr>
                  <center>
                  <h4>
                    <strong>
                      Al finalizar estos pasos habilitará su gmail para enviar correos a través de esta plataforma.
                    </strong>
                  </h4>
                  </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
