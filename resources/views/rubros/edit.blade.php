@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rubro
                </div>
                <div class="card-body">
                   {!! Form::model($rubro, ['route' => ['rubros.update', $rubro->id],
                    'method' => 'PUT']) !!}

                        @include('rubros.partials.formCreate')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection