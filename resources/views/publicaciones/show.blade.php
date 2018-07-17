@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Publicaciones
                @can('products.create')
                    <a href="{{ route('publicaciones.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                @endcan
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="10%">ID</th>
                               <th>Región</th>
                               <th>Estado</th>
                               <th colspan="3" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($boletines as $boletin)
                          <tr>
                            <td>{{ $boletin->id }}</td>
                            <td>{{ $boletin->region->name }}</td>
                            <td>
                              @if($boletin->estado == 1)
                              Abierto
                              @else
                              Cerrado
                              @endif
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('boletines.show', $boletin->id) }}"
                              class="btn btn-sm btn-primary">Ver</a>
                            </td>
                            <td style="text-align: center;">
                              <a href=""
                              class="btn btn-sm btn-success">Agregar Boletin</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('boletines.pdfTemplate', $boletin->id) }}"
                              class="btn btn-sm btn-warning">PDF</a>
                            </td>
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