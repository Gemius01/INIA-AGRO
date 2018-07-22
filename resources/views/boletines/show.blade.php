@extends('layouts.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                        <strong>
                            Boletín Agrometeorológico - Vista previa - {{ $boletin->region->name}} - Publicacion de {{ $boletin->publicacion->mes}} {{ $boletin->publicacion->año}}
                        </strong>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@foreach($boletin->secciones as $seccion)

<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$seccion->name}}
                    @can('seccion-'.$seccion->id)
                        @if($boletin->estado == 1)
                        <a href="{{ route('editor', ['boletin'=>$boletin->id, 'seccion'=>encrypt($seccion->id)])}}"
                        class="btn btn-sm btn-success pull-right">Editar</a>
                        @else
                        <a href="#"
                        class="btn btn-sm btn-success pull-right disabled">Cerrado</a>
                        @endif
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
                                    {{$macrozona->name}} > {{ $macrozona->rubro->name }} > {{ $macrozona->rubro->subrubro}}
                                </strong>
                            </p>
                            @can('macrozona-'.$macrozona->id)
                                @if($boletin->estado == 1)
                                    <a  
                                        class="btn btn-sm btn-primary pull-right" 
                                        href="{{ route('editormacrozona', ['boletin'=>$boletin->id, 'subseccion'=>$subseccion->id, 'macrozona' => $macrozona->id ])}}"
                                    >Editar</a>
                                @else
                                    <a class="btn btn-sm btn-primary pull-right" href="#">Cerrado</a>
                                @endif
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