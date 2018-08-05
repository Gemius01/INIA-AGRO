@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Publicaciones  
                @can('publicaciones.create')
                    <a href="{{ route('publicaciones.create')}}"
                    class="btn btn-sm btn-primary pull-right" style="margin-left: 5px;">Crear</a>
                @endcan
                @can('publicaciones.publicar')
                    <a href="{{ route('publichtml.enabledisable')}}"
                    class="btn btn-sm btn-info pull-right" style="margin-left: 5px;"><i class="fa fa-html5" aria-hidden="true"></i> Publicar HTML</a>
                @endcan
                @can('publicaciones.publicar')
                    <a target="__blank" href="/laravel-filemanager?type=image"
                    class="btn btn-sm btn-info pull-right" style="margin-left: 5px;"><i class="fa fa-picture-o"></i> Administrar Imagenes</a>
                @endcan
                <a  href="{{ route('elegir.eliminar')}}"
                    class="btn btn-sm btn-danger pull-right" style="margin-left: 5px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Vaciar elegir</a>
                </div>
                <div class="card-body">
                  <strong>Publicación elegida actualmente</strong>
                  <ul>
                    <li>
                      <strong>
                        MES :
                        @if($publicacionActual->mes != null)
                          {{$publicacionActual->mes->nombre}}
                        @else

                        @endif
                      </strong>
                    </li>
                    <li>
                      <strong>
                        AÑO :
                        @if($publicacionActual->año !=null)
                        {{$publicacionActual->año}}
                        @else
                        @endif
                      </strong>
                    </li>
                  </ul>
                  <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th>Año</th>
                               <th>Mes</th>
                               <th colspan="5" style="text-align: center;" width="30%">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($publicaciones as $publicacion)
                          @if($publicacion->id == $publicacionActual->id)
                          <tr style="background-color: #80ff80;">
                          @else
                          <tr>
                          @endif
                            <td>{{$publicacion->año}}</td>
                            <td>{{$publicacion->mes->nombre}}</td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.abrirCerrar', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Abrir/Cerrar</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.show', $publicacion->id) }}"
                              class="btn btn-sm btn-primary">Ver</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicacion.edit', $publicacion->id) }}"
                              class="btn btn-sm btn-success">Editar</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('xmlview', $publicacion->id) }}"
                              class="btn btn-sm btn-warning"><i class="fa fa-file-code-o" aria-hidden="true"></i> XML</a>
                            </td>
                            <td style="text-align: center;">
                              <a href="{{ route('publicaciones.vistaElegir', $publicacion->id) }}"
                              class="btn btn-sm btn-warning">Elegir</a>
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
