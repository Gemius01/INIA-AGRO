@extends('layouts.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>
                    Boletín Agrometeorológico-Vista previa-Resumen Ejecutivo Nacional-Publicación de {{ $resumen->publicacion->mes->nombre}} {{ $resumen->publicacion->año}}
                    </strong>
                    @if($rol->id == 1)
                    <a href="{{ route('publicaciones.show', $resumen->publicacion->id)}}"
                    class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Volver Atrás
                    </a>
                    @else
                    <a href="/home"
                    class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Volver Atrás
                    </a>
                    @endif
                    <a href="{{ route('resumenespdf', $resumen->id) }}"
                        class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($resumen->regiones as $region)
@if($region->id == 1)
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resumen Ejecutivo {{$region->name}}
                    @if($rol->id == 2)
                    <a href="{{ route('editorresumen', ['resumen'=>encrypt($resumen->id), 'region'=>encrypt($region->id)])}}"
                    class="btn btn-sm btn-success pull-right"> <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                    @else
                        @can('seccion-'.$region->id)
                        <a href="{{ route('editorresumen', ['resumen'=>encrypt($resumen->id), 'region'=>encrypt($region->id)])}}"
                        class="btn btn-sm btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                        @endcan
                    @endif
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
                    @if($rol->id == 2)
                    <a href="{{ route('editorresumen', ['resumen'=>encrypt($resumen->id), 'region'=>encrypt($region->id)])}}"
                    class="btn btn-sm btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>  Editar</a>
                    @else
                        @can('seccion-'.$region->id)
                        <a href="{{ route('editorresumen', ['resumen'=>encrypt($resumen->id), 'region'=>encrypt($region->id)])}}"
                        class="btn btn-sm btn-success pull-right" ><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                        @endcan
                    @endif
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
