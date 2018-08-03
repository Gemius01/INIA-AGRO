@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rubros
                @can('products.create')
                <div style="text-align:right;">
                    <a href="{{ route('rubros.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                </div>
                @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <!-- <th width="10%">ID</th> -->
                               <th width="35%">Nombre</th>
                               <th width="35%">Subrubro</th>
                               <th colspan="3" width="30%" style="text-align: center;">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($rubros as $rubro)
                           <tr>

                            <!--<td>{{ $rubro->id }}</td> -->
                            <td>{{ $rubro->name }}</td>
                            <td>{{ $rubro->subrubro }}</td>
                            <!--
                            @can('products.show')
                               <td style="text-align: center;">
                                   <a href="{{ route('rubros.show', $rubro->id) }}"
                                    class="btn btn-sm btn-primary">Ver</a>
                               </td>
                               @endcan
                             -->
                               @can('products.edit')
                               <td style="text-align: center;">
                                   <a href="{{ route('rubros.edit', $rubro->id) }}"
                                    class="btn btn-sm btn-success">Editar</a>

                               </td>
                               @endcan
                                @can('products.destroy')
                               <td style="text-align: center;">
                                    {!! Form::open(['route' => ['rubros.destroy', $rubro->id],
                                    'method' => 'DELETE']) !!}
                                    <button onclick="return confirm('¿Esta seguro de eliminar?')" class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                               </td>
                               @endcan
                          </tr>
                          @endforeach
                       </tbody>
                   </table>
                   <center>

               </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
