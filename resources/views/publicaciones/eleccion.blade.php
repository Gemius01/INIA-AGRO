@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <strong>¿Estás seguro de elegir esta publicación para su edición?</strong>
                </div>
                <div class="card-body">


                  {!! Form::model($publicacion, ['route' => ['publicaciones.elegirPublicacion', $publicacion->id],
                    'method' => 'PUT']) !!}


                        @include('publicaciones.partials.formEleccion')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection