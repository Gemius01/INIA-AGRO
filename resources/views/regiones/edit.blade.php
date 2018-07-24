@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Región
                </div>
                <div class="card-body">
                   {!! Form::model($region, ['route' => ['regiones.update', $region->id],
                    'method' => 'PUT']) !!}

                        @include('regiones.partials.formCreate')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection