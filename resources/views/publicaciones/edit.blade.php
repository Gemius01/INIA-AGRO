@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Publicación
                </div>
                <div class="card-body">
                   {!! Form::model($publicacion, ['route' => ['publicacion.update', $publicacion->id],
                    'method' => 'PUT']) !!}

                        @include('publicaciones.partials.formEdit')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection