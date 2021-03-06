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
                          @if($rol->id == 1)
                        <a href="{{ route('publicaciones.show', $boletin->publicacion->id)}}"
                    class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver Atrás</a>
                    @else
                    <a href="/home"
                class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver Atrás</a>
                    @endif
                    @if($rol->id ==2 || $rol->id == 1)
                        <a href="{{ route('boletines.pdfTemplate', $boletin->id) }}"
                              class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
                    @else
                    
                    @endif
                    

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
                    @if($rol->id != 2 && $rol->id !=1)
                        @can('seccion-'.$seccion->id)
                            @if($boletin->estado == 1)
                            <a href="{{ route('editor', ['boletin'=>encrypt($boletin->id), 'seccion'=>encrypt($seccion->id)])}}"
                            class="btn btn-sm btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                            @if($seccion->pivot->editando)
                        <a href="#"
                            class="btn btn-sm btn-warning pull-right"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Están Editando</a>
                        @else
                        @endif
                            @else
                            <a href="#"
                            class="btn btn-sm btn-success pull-right disabled">Cerrado</a>
                        @endif
                        @endcan
                    @else
                    
                        <a href="{{ route('editor', ['boletin'=>encrypt($boletin->id), 'seccion'=>encrypt($seccion->id)])}}"
                        class="btn btn-sm btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                    @if($seccion->id == 7 || $seccion->id == 8 || $seccion->id == 9 || $seccion->id == 10)
                        <a href="{{ route('seccionHidro.pdf', ['boletin'=> $boletin->id, 'seccion'=>$seccion->id])}}"
                            class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            PDF
                        </a>
                    @endif
                        
                    @if($seccion->pivot->editando)
                    <a href="#"
                        class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Están Editando</a>
                    @else
                    @endif
                    @endif
                    @if($seccion->pivot->autor)
                        <div 
                            class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;">
                            Editado por : {{ $seccion->pivot->autor }}
                        </div>
                    @endif
                </div>
                <div class="card-body resize">
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
                            
                            @if($rol->id !=2 && $rol->id != 1)
                            
                            @can('macrozona-'.$macrozona->id)
                                @if($boletin->estado == 1)
                                    
                                    <a
                                    
                                        class="btn btn-sm btn-primary pull-right"
                                        href="{{ route('editormacrozona', ['boletin'=>encrypt($boletin->id), 'subseccion'=>encrypt($subseccion->id), 'macrozona' => encrypt($macrozona->id) ])}}" style="margin-left: 5px;"
                                    > <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                    
                                    @if( $macrozona->pivot->resumen != null)
                                    
                                        
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#" style="margin-left: 5px;"
                                    > <i class="fa fa-eye" aria-hidden="true"></i> Ver Resumen</a>
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
                                      <div class="modal-body resize">
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
                                        style="margin-left: 5px;"
                                    >Resumen Vacío
                                    </a>
                                    @endif
                                @else
                                <a class="btn btn-sm btn-primary pull-right disabled" href="#">Cerrado</a>
                                 @if( $macrozona->pivot->resumen != null)
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#" style="margin-left: 5px;"
                                    ><i class="fa fa-eye" aria-hidden="true"></i> Ver Resumen</a>
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
                                      <div class="modal-body resize">
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
                                        style="margin-left: 5px;"
                                        href="#"
                                    >Resumen Vacío
                                    </a>
                                    @endif
                                @endif
                                @if($macrozona->pivot->editando)
                                        <div
                                            class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-exclamation-triangle" aria-hidden="true" ></i> Editando</div>
                                        
                                        @else
                                        @endif
                            
                            @endcan
                            
                            @else
                            <!-- Admin -->
                                    
                                    <a
                                        class="btn btn-sm btn-primary pull-right"
                                        href="{{ route('editormacrozona', ['boletin'=>encrypt($boletin->id), 'subseccion'=>encrypt($subseccion->id), 'macrozona' => encrypt($macrozona->id) ])}}" style="margin-left: 5px;"
                                    ><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                    @if( $macrozona->pivot->resumen != null)
                                    
                                        <a
                                        class="btn btn-sm btn-info pull-right "
                                        data-toggle="modal" data-target="#modalResumen{{$macrozona->id}}"
                                        href="#" style="margin-left: 5px;"
                                    ><i class="fa fa-eye" aria-hidden="true"></i> Ver Resumen</a>
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
                                      <div class="modal-body resize">
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
                                        style="margin-left: 5px;"
                                    >Resumen Vacío
                                    </a>
                                    
                                    @endif
                                    @if($macrozona->pivot->editando)
                                        <a href="#"
                                            class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-exclamation-triangle" aria-hidden="true" ></i> Editando</a>
                                        
                                        @else
                                        @endif
                            <!--end admin -->
                            @endif
                            @if($macrozona->pivot->autor)
                            <div 
                            class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;">
                            Editado por : {{ $macrozona->pivot->autor }}
                            </div>
                            @endif
                        
                        </p>
                        <div class="resize">
                        {!! $macrozona->pivot->contenido !!}
                        </div>
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
