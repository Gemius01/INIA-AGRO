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
                  <strong>Publicación elegida actualmente</strong>
                  <ul>
                   
                    <li><strong>MES :</strong> {{ $publicacionActual->mes}}</li>
                    <li><strong>AÑO :</strong> {{ $publicacionActual->año}}</li>
                    
                  </ul>
                  <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="10%">ID</th>
                               <th>Mes</th>
                               <th>Año</th>
                               <th colspan="5" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($publicaciones as $publicacion)
                          <tr>
                            <td>{{ $publicacion->id }}</td>
                            <td>{{ $publicacion->mes }}</td>
                            <td>{{ $publicacion->año }}</td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.abrirCerrar', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Abrir/Cerrar</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.show', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Ver</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.show', $publicacion->id) }}"
                              class="btn btn-sm btn-success">Agregar Boletin</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('xmlview', $publicacion->id) }}"
                              class="btn btn-sm btn-warning">XML</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.vistaElegir', $publicacion->id) }}"
                              class="btn btn-sm btn-warning">Elegir</a>
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