@extends('layouts.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                        <strong>
                            Boletín Agrometeorológico - Vista previa - {{ $boletin->region->name}} - Publicación de {{ $boletin->publicacion->mes->nombre}} {{ $boletin->publicacion->año}}
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

                    @if($rol->id != 2 ?? $rol->id !=1)
                    @can('seccion-'.$seccion->id)
                        @if($boletin->estado == 1)
                        <a href="{{ route('editor', ['boletin'=>$boletin->id, 'seccion'=>encrypt($seccion->id)])}}"
                        class="btn btn-sm btn-success pull-right">Editar</a>
                        @else
                        <a href="#"
                        class="btn btn-sm btn-success pull-right disabled">Cerrado</a>
                    @endif
                    @endcan
                    @else


                        <a href="{{ route('editor', ['boletin'=>$boletin->id, 'seccion'=>encrypt($seccion->id)])}}"
                        class="btn btn-sm btn-success pull-right">Editar</a>


                    @endif
                </div>

                <div class="card-body">
                 {!! $seccion->pivot->contenido !!}
                 @if($seccion->id == 6)
                     @foreach($boletin->subsecciones as $subseccion)
                        @foreach($subseccion->macrozonas as $macrozona)
                        <p>
                            <p class="text-muted btn">
                                <strong>
                                    {{$macrozona->name}}
                                    @if($macrozona->rubro != null)
                                    > {{ $macrozona->rubro->name }}
                                        @if($macrozona->rubro->subrubro != null)
                                        > {{ $macrozona->rubro->subrubro}}
                                        @else
                                        @endif
                                    @else
                                    @endif
                                </strong>
                            </p>
                            @if($rol->id !=2 ?? $rol->id != 1)
                            @can('macrozona-'.$macrozona->id)
                                @if($boletin->estado == 1)
                                    <a
                                        class="btn btn-sm btn-primary pull-right"
                                        href="{{ route('editormacrozona', ['boletin'=>$boletin->id, 'subseccion'=>$subseccion->id, 'macrozona' => $macrozona->id ])}}"
                                    >Editar</a>
                                    @if( $macrozona->pivot->resumen != null)
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#"
                                    >Ver Resumen</a>
                                     <div class="modal fade" id="modalResumen{{$macrozona->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">

                                        <h6 class="modal-title" id="myModalLabel">
                                         {{$macrozona->name}}
                                            @if($macrozona->rubro != null)
                                            > {{ $macrozona->rubro->name }}
                                                @if($macrozona->rubro->subrubro != null)
                                                > {{ $macrozona->rubro->subrubro}}
                                                @else
                                                @endif
                                            @else
                                            @endif

                                        </h4>
                                      </div>
                                      <div class="modal-body">
                                        {!! $macrozona->pivot->resumen !!}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                        </button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    @else
                                    <a
                                        class="btn btn-sm btn-info pull-right disabled"

                                        href="#"
                                    >Resumen Vacío
                                    </a>
                                    @endif
                                @else
                                <a class="btn btn-sm btn-primary pull-right disabled" href="#">Cerrado</a>
                                 @if( $macrozona->pivot->resumen != null)
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#"
                                    >Ver Resumen</a>
                                     <div class="modal fade" id="modalResumen{{$macrozona->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">

                                        <h6 class="modal-title" id="myModalLabel">
                                         {{$macrozona->name}}
                                            @if($macrozona->rubro != null)
                                            > {{ $macrozona->rubro->name }}
                                                @if($macrozona->rubro->subrubro != null)
                                                > {{ $macrozona->rubro->subrubro}}
                                                @else
                                                @endif
                                            @else
                                            @endif

                                        </h4>
                                      </div>
                                      <div class="modal-body">
                                        {!! $macrozona->pivot->resumen !!}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                        </button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    @else
                                    <a
                                        class="btn btn-sm btn-info pull-right disabled"

                                        href="#"
                                    >Resumen Vacío
                                    </a>
                                    @endif

                                @endif
                            @endcan
                            @else
                            <!-- Admin -->

                                    <a
                                        class="btn btn-sm btn-primary pull-right"
                                        href="{{ route('editormacrozona', ['boletin'=>$boletin->id, 'subseccion'=>$subseccion->id, 'macrozona' => $macrozona->id ])}}"
                                    >Editar</a>
                                    @if( $macrozona->pivot->resumen != null)
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#"
                                    >Ver Resumen</a>
                                     <div class="modal fade" id="modalResumen{{$macrozona->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">

                                        <h6 class="modal-title" id="myModalLabel">
                                         {{$macrozona->name}}
                                            @if($macrozona->rubro != null)
                                            > {{ $macrozona->rubro->name }}
                                                @if($macrozona->rubro->subrubro != null)
                                                > {{ $macrozona->rubro->subrubro}}
                                                @else
                                                @endif
                                            @else
                                            @endif

                                        </h6>
                                      </div>
                                      <div class="modal-body">
                                        {!! $macrozona->pivot->resumen !!}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                        </button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    @else
                                    <a
                                        class="btn btn-sm btn-info pull-right disabled"

                                        href="#"
                                    >Resumen Vacío
                                    </a>
                                    @endif

                            <!--end admin -->
                            @endif
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
