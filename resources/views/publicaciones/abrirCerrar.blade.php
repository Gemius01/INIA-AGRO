@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicacion : {{ $publicacion->mes->nombre }} / {{ $publicacion->año }}
                  {!! Form::open(['route' => ['boletines.cerrartodos', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                        <button onclick="return confirm('¿Estás seguro de cerrar todos los boletines?')" class="btn btn-sm btn-danger pull-right" style="margin-left:5px;"><i class="fa fa-toggle-off" aria-hidden="true"></i> 
                                            CERRAR TODOS
                                        </button>
                     {!! Form::close() !!}  
                       {!! Form::open(['route' => ['boletines.abrirtodos', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                        <button onclick="return confirm('¿Estás seguro de abrir todos los boletines?')" class="btn btn-sm btn-primary pull-right" style="margin-left:5px;"><i class="fa fa-toggle-on" aria-hidden="true"></i> 
                                            ABRIR TODOS
                                        </button>
                     {!! Form::close() !!}  
                </div>
                <div class="card-body">
                     <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Region</th>
                               <th>Estado</th>
                               <th colspan="5" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($publicacion->boletines as $boletin)
                          <tr>
                            <td>{{ $boletin->region->name }}</td>
                                @if($boletin->estado == 1)
                                    <td style="background-color: #e6ffe6; text-align: center;">
                                        Abierto
                                    </td>
                                @else
                                    <td style="background-color: #ffcccc; text-align: center;">
                                        Cerrado
                                    </td>
                                @endif
                                <td style="text-align: center;">
                                    {!! Form::open(['route' => ['boletines.abrir', $boletin->id, $publicacion->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Esta seguro de abrir?')" class="btn btn-sm btn-primary" >
                                            Abrir
                                        </button>
                                    {!! Form::close() !!}
                               </td>
                                <td style="text-align: center;">
                                    {!! Form::open(['route' => ['boletines.cerrar', $boletin->id, $publicacion->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Esta seguro de cerrar?')" class="btn btn-sm btn-danger" >
                                            Cerrar
                                        </button>
                                    {!! Form::close() !!}
                               </td>
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