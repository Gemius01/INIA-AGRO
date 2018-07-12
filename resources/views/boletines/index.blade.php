@extends('layouts.app')

@section('content')
<div class=""><!--container class -->
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Boletin

                    <a href="{{ route('boletines.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>

                </div>

                <div class="card-body" width="100%">
                   <table class="table table-striped table-hover table-bordered" width="100%">
                       <thead>
                           <tr>
                               <th width="10px">ID</th>
                               <th>Fecha</th>
                               <th>Región</th>
                               <th colspan="4"><center>Opciones</center></th>
                           </tr>
                       </thead>
                          @foreach($boletines as $boletin)
                           <tr>
                               <td>{{ $boletin->id }}</td>
                               <td>{{ $boletin->creacion}}</td>
                               <td>{{ $boletin->region->name }}</td>
                               @can('boletines.show')
                               <td>
                                   <a href="{{ route('boletines.show', $boletin->id) }}"
                                    class="btn btn-sm btn-primary">Ver</a>
                               </td>
                               @endcan
                               @can('products.edit')
                               <td>
                                   <a href="{{ route('products.edit', $boletin->id) }}"
                                    class="btn btn-sm btn-success">Editar</a>

                               </td>
                               @endcan
                                @can('products.destroy')
                               <td>
                                    {!! Form::open(['route' => ['products.destroy', $boletin->id],
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                               </td>
                               <td>
                                 <a href="{{ route('boletines.pdfTemplate', $boletin->id) }}"
                                  class="btn btn-sm btn-success">PDF</a>
                               </td>
                               @endcan
                           </tr>
                           @endforeach
                       <tbody>

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
