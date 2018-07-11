@extends('layouts.app')

@section('content')
@foreach($boletin->secciones as $seccion)
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$seccion->name}}<a href="{{ route('users.create')}}"
                    class="btn btn-sm btn-success pull-right">Editar</a>
                </div>
                <div class="card-body">
                 {!! $seccion->pivot->contenido !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection