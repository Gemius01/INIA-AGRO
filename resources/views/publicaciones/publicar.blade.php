@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Publicaciones
                </div>
                <div class="card-body">
                  <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Mes</th>
                               <th>Año</th>
                               <th>Público</th>
                               <th colspan="5" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($publicaciones as $publicacion)
                          @if($publicacion->public == true)
                          <tr style="background-color: #80ff80">
                            <td>{{$publicacion->mes->nombre}}</td>
                            <td>{{$publicacion->año}}</td>
                            <td>Habilitado</td>
                            <td style="text-align: center;">
                              {!! Form::open(['route' => ['publichtml.enabledisableRequest', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Está seguro de deshabilitar la publicación?')" class="btn btn-sm btn-primary" >
                                            Deshabilitar
                                        </button>
                              {!! Form::close() !!}
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publichtml.boletines.show', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Boletines</a>
                            </td>
                          </tr>
                          @else
                          <tr style="background-color: #ff6666">
                            <td>{{$publicacion->mes->nombre}}</td>
                            <td>{{$publicacion->año}}</td>
                            <td>Deshabilitado</td>
                            <td style="text-align: center;">
                              {!! Form::open(['route' => ['publichtml.enabledisableRequest', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Está seguro de habilitar la publicacion?')" class="btn btn-sm btn-primary" >
                                            Habilitar
                                        </button>
                              {!! Form::close() !!}
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publichtml.boletines.show', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Boletines</a>
                            </td>
                          </tr>
                          @endif
                        @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
