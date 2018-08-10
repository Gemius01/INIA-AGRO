@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h1 style="color:red; font-weight: bold;">¡ATENCIÓN! ESTÁ POR ELIMINAR UNA PUBLICACIÓN</h1>
                    </center>
                </div>
                <div class="card-body">
                   {!! Form::model($findPublicacion, ['route' => ['publicacion.eliminar', $findPublicacion->id],
                    'method' => 'POST']) !!}

                        @include('publicaciones.partials.formDelete')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection