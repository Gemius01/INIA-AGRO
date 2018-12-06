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
  @if($seccion->pivot->contenido != null)
  <div >
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{$seccion->name}}
          @if($seccion->id == 7 || $seccion->id == 8 || $seccion->id == 9 || $seccion->id == 10)
              <a href="{{ route('seccionHidro.pdf', ['boletin'=> $boletin->id, 'seccion'=>$seccion->id])}}"
                  class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                  PDF
              </a>
          @endif
          </div>
          <div class="card-body resize">
            {!! $seccion->pivot->contenido !!}
            @if($seccion->id == 6)
            @foreach($boletin->subsecciones as $subseccion)
            @foreach($subseccion->macrozonas as $macrozona)
            
              @if($macrozona->pivot->contenido != null)
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
                
                @can('macrozona-'.$macrozona->id)
                @if($boletin->estado == 1)
                
                @if( $macrozona->pivot->resumen != null)
                
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
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
                @else
              
                @endif
                @else
                
                @if( $macrozona->pivot->resumen != null)
              
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
              
                @endif
                
                @endif
                @endcan
                
              </p>
              {!! $macrozona->pivot->contenido !!}
              <hr>
              @else
              @endif
            @endforeach
            @endforeach
            @else
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
  @endif
@endforeach
@endsection