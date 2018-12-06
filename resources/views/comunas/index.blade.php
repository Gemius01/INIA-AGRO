@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comunas
                @can('comunas.create')
                    <a href="{{ route('comunas.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="20%">Región</th>
                               <th width="30%">Nombre</th>
                               <th width="20%">Codigo</th>
                               <th colspan="4" width="30%" style="text-align: center;">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($comunas as $comuna)
                           <tr>
                            <td>{{ $comuna->region->name }} [ {{ $comuna->region->numero }} ]</td>
                            <td>{{ $comuna->nombre }}</td>
                            <td>{{ $comuna->codigo }}</td>
                            <td style="text-align: center;">
                                   <a href="{{ route('comunas.macrozonas', $comuna->id) }}"
                                    data-toggle="modal" data-target="#modalResumen{{$comuna->id}}"
                                    class="btn btn-sm btn-primary"><i class="fa fa-code" aria-hidden="true"></i> 
                                    
                                  </a>
                             </td>
                             <div class="modal fade" id="modalResumen{{$comuna->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h6 class="modal-title" id="myModalLabel">
                                            <strong>Ruta para obtener las recomendaciones</strong>
                                        </h4>
                                      </div>
                                      <div class="modal-body">
                                      {{  url('/')."/public/comunas/".$comuna->codigo}}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @can('comunas.macrozonas')
                               <td style="text-align: center;">
                                   <a href="{{ route('comunas.macrozonas', $comuna->id) }}"
                                    class="btn btn-sm btn-warning"><i class="fa fa-globe" aria-hidden="true"></i> 
                                    Macrozonas
                                  </a>
                               </td>
                               @endcan
                               @can('comunas.edit')
                               <td style="text-align: center;">
                                   <a href="{{ route('comunas.edit', $comuna->id) }}"
                                    class="btn btn-sm btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> 
                                    Editar
                                  </a>
                               </td>
                               @endcan
                                @can('comunas.destroy')
                               <td style="text-align: center;">
                                    {!! Form::open(['route' => ['comunas.destroy', $comuna->id],
                                    'method' => 'DELETE']) !!}
                                    <button onclick="return confirm('¿Esta seguro de eliminar?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> 
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                               </td>
                               @endcan
                          </tr>
                          @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


