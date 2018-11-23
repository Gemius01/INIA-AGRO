@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Agregar Macrozonas
                </div>
                <div class="card-body">

                    {!! Form::model($comuna, ['route' => ['comunas.macrozonasGuardar', $comuna->id],
                    'method' => 'POST']) !!}

                        @include('comunas.partials.formmacrozonas')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection