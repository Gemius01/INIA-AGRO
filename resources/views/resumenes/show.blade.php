@extends('layouts.app')

@section('content')

@foreach($resumen->regiones as $seccion)

<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$seccion->name}}
                    @can('seccion-'.$seccion->id)
                    <a href=""
                    class="btn btn-sm btn-success pull-right">Editar</a>
                    @endcan
                </div>

                <div class="card-body">
                

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection