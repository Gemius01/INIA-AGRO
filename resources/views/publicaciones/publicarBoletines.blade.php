@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicacion : {{ $publicacion->mes->nombre }} / {{ $publicacion->año }}
                </div>
                <div class="card-body">
                     <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               
                               <th>Region</th>
                               <th>Público</th>
                               <th colspan="5" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($publicacion->boletines as $boletin)
                          <tr>
                            
                            <td>{{ $boletin->region->name }}</td>
                                @if($boletin->publico == 1)
                                    <td style="background-color: #e6ffe6; text-align: center;">
                                        Habilitado
                                    </td>
                                @else
                                    <td style="background-color: #ffcccc; text-align: center;">
                                        Deshabilitado
                                    </td>

                                @endif
                                @if($boletin->publico == 1)
                                <td style="text-align: center;">
                                 {!! Form::open(['route' => ['publichtml.boletin.enabledisable', $boletin->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Esta seguro de abrir?')" class="btn btn-sm btn-primary" >
                                            Deshabilitar
                                        </button>
                                    {!! Form::close() !!}
                               </td>
                                @else
                                <td style="text-align: center;">
                                 {!! Form::open(['route' => ['publichtml.boletin.enabledisable', $boletin->id], 
                                    'method' => 'PUT']) !!}
                                        <button onclick="return confirm('¿Esta seguro de abrir?')" class="btn btn-sm btn-primary" >
                                            Habilitar
                                        </button>
                                    {!! Form::close() !!}
                               </td>
                                @endif

                               
                          </tr>
                        @endforeach

                       </tbody>
                   </table>
                   <center>
                    
                    <hr>

                     {!! Form::open(['route' => ['publichtml.boletin.deshabilitarTodos', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                        <button onclick="return confirm('¿Estás seguro de deshabilitar todos los boletines?')" class="btn btn-sm btn-danger" >
                                            DESHABILITAR TODOS
                                        </button>
                     {!! Form::close() !!}  
                     <hr>
                       {!! Form::open(['route' => ['publichtml.boletin.habilitarTodos', $publicacion->id], 
                                    'method' => 'PUT']) !!}
                        <button onclick="return confirm('¿Estás seguro de habilitar todos los boletines?')" class="btn btn-sm btn-primary" >
                                            HABILITAR TODOS
                                        </button>
                     {!! Form::close() !!}  
                       
                   </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection