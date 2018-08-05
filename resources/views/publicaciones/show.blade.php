@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Publicación del mes de {{ $resumen->publicacion->mes->nombre }} del {{ $resumen->publicacion->año }}
                @can('products.create')
                    <a href="{{ route('publicaciones.index')}}"
                       class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> 
                        Volver Atrás
                    </a>
                @endcan
                    <a href="{{ route('xmlview', $resumen->publicacion->id) }}"
                       class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;"><i class="fa fa-file-code-o" aria-hidden="true"></i>
                               XML
                    </a>
                </div>
                <div class="card-body">
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Mes</th>
                               <th>Año</th>
                               <th colspan="2" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          <tr>
                            <td>{{ $resumen->publicacion->mes->nombre }}</td>
                            <td>{{ $resumen->publicacion->año }}</td>
                            <td style="text-align: center;">
                              <a href="{{ route('resumenes.show', encrypt($resumen->id)) }}"
                              class="btn btn-sm btn-primary">Ver</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('resumenespdf', $resumen->id) }}"
                              class="btn btn-sm btn-warning"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
                            </td>
                          </tr>
                       </tbody>
                   </table>
                   <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Región</th>
                               <th>Estado</th>
                               <th colspan="2" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($boletines as $boletin)
                          <tr>
                            <td>{{ $boletin->region->name }}</td>
                            <td>
                              @if($boletin->estado == 1)
                              Abierto
                              @else
                              Cerrado
                              @endif
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('boletines.show', encrypt($boletin->id)) }}"
                              class="btn btn-sm btn-primary">Ver</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('boletines.pdfTemplate', $boletin->id) }}"
                              class="btn btn-sm btn-warning"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
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
