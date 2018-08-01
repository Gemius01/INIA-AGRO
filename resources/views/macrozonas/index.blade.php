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
                  <div>
                    <label>Macrozonas por región</label>
                  <select id="selectRegion" class="form-control" >
                    @foreach($regiones as $region)
                    <option value="{{$region->id}}">{{ $region->name }}</option>
                    @endforeach
                  </select>
                </div>
                <hr>
                   <table class="table table-striped table-hover table-bordered">
                       <thead>
                           <tr>
                               <!--<th width="10%">ID</th> -->
                               <th>Región</th>
                               <th width="30%">Nombre</th>
                               <th>Rubro</th>
                               <th>Subrubro</th>
                               <th colspan="3" width="20%" style="text-align: center;">Opciones</th>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($macrozonas as $macrozona)
                           <tr>

                            <!--<td>{{ $macrozona->id }}</td>-->
                            <td>{{ $macrozona->region['name'] ?: '-'}}
                            <td>{{ $macrozona->name }}</td>
                            <td>{{ $macrozona->rubro['name'] ?: '-' }}
                            <td>{{ $macrozona->rubro['subrubro'] ?: '-' }}</td>
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
      var idRegion = document.getElementById('selectRegion').value;
      console.log(idRegion);
      var url = window.location.origin + '/macrozonas?region=' + idRegion;
      window.location.href = url;
});
});

</script>
@endsection
