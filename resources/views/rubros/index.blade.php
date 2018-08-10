@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rubros
                @can('products.create')
                    <a href="{{ route('rubros.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="35%">Nombre</th>
                               <th width="35%">Subrubro</th>
                               <th colspan="3" width="30%" style="text-align: center;">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($rubros as $rubro)
                           <tr>
                            <td>{{ $rubro->name }}</td>
                            <td>@if($rubro->subrubro != null){{ $rubro->subrubro }}@else - @endif</td>
                               @can('products.edit')
                               <td style="text-align: center;">
                                   <a href="{{ route('rubros.edit', $rubro->id) }}"
                                      class="btn btn-sm btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> 
                                    Editar
                                  </a>
                               </td>
                               @endcan
                                @can('products.destroy')
                               <td style="text-align: center;">
                                    {!! Form::open(['route' => ['rubros.destroy', $rubro->id],
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
                   <center>

               </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
