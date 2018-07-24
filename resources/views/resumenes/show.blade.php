@extends('layouts.app')

@section('content')

@foreach($resumen->regiones as $region)
@if($region->id == 1)
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resumen Ejecutivo {{$region->name}}
                    @can('seccion-'.$region->id)
                    <a href="{{ route('editorresumen', ['resumen'=>$resumen->id, 'region'=>$region->id])}}"
                    class="btn btn-sm btn-success pull-right">Editar</a>
                    @endcan
                </div>

                <div class="card-body">
                {!! $region->pivot->contenido !!}

                </div>
            </div>
        </div>
    </div>
</div>
@else
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$region->name}}
                    @can('seccion-'.$region->id)
                    <a href="{{ route('editorresumen', ['resumen'=>$resumen->id, 'region'=>$region->id])}}"
                    class="btn btn-sm btn-success pull-right">Editar</a>
                    @endcan
                </div>

                <div class="card-body">
                {!! $region->pivot->contenido !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endforeach

@endsection