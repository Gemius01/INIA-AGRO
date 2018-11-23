@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Comuna
                </div>
                <div class="card-body">
                   {!! Form::model($comuna, ['route' => ['comunas.update', $comuna->id],
                    'method' => 'PUT']) !!}
                        @include('comunas.partials.formedit')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
