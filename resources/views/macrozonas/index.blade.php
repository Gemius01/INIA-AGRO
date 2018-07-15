@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Macrozona
                @can('products.create')
                    <a href="{{ route('macrozonas.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                @endcan
                </div>
                <div class="card-body">
                  <select class="form-control" id="selectRegion">
                    @foreach($regiones as $region)
                    <option value="{{$region->id}}">{{ $region->name }}</option>
                    @endforeach
                  </select>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <th width="10%">ID</th>
                               <th>Nombre</th>
                               <th>Región</th>
                               <th>Rubro</th>
                               <th colspan="3" style="text-align: center;">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($macrozonas as $macrozona)
                           <tr>

                            <td>{{ $macrozona->id }}</td>
                            <td>{{ $macrozona->name }}</td>
                            <td>{{ $macrozona->region['name'] ?: '-'}}
                            <td>{{ $macrozona->rubro['name'] ?: '-' }}
                            @can('products.show')
                               <td style="text-align: center;">
                                   <a href="{{ route('macrozonas.show', $macrozona->id) }}"
                                    class="btn btn-sm btn-primary">Ver</a>
                               </td>
                               @endcan
                               @can('products.edit')
                               <td style="text-align: center;">
                                   <a href="{{ route('macrozonas.edit', $macrozona->id) }}"
                                    class="btn btn-sm btn-success">Editar</a>
                                   
                               </td>
                               @endcan
                                @can('products.destroy')
                               <td style="text-align: center;">
                                    {!! Form::open(['route' => ['macrozonas.destroy', $macrozona->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
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
                 <center>
                  
               </center>
            </div>
        </div>
    </div>
</div>
<script>
  $( document ).ready(function() {
    $( "#selectRegion" ).change(function() {
      var idRegion = document.getElementById('#selectRegion').value;
    var url = document.location.href+"?region="+ idRegion;
      document.location = url;
});
});
  
</script>
@endsection