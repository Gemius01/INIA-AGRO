@extends('layouts.app')

@section('content')

@foreach($boletin->secciones as $seccion)

<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$seccion->name}}
                    @can('seccion-'.$seccion->id)
                    <a href="{{ route('editor', ['boletin'=>$boletin->id, 'seccion'=>encrypt($seccion->id)])}}"
                    class="btn btn-sm btn-success pull-right">Editar</a>
                    @endcan
                </div>

                <div class="card-body">
                 {!! $seccion->pivot->contenido !!}
                 @if($seccion->id == 6)
                     @foreach($boletin->subsecciones as $subseccion)
                        @foreach($subseccion->macrozonas as $macrozona)
                        <p>
                            <p class="text-muted btn">
                                <strong>
                                    {{$macrozona->name}} > {{ $macrozona->rubro->name }}
                                </strong>
                            </p>
                            @can('macrozona-'.$macrozona->id)
                            <a class="btn btn-sm btn-primary pull-right" href="#">Editar</a>
                            @endcan
                        </p>

                        {!! $macrozona->pivot->contenido !!}
                        <hr>
                        @endforeach
                     @endforeach
                 @else
                 @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection