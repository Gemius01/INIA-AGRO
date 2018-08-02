@extends('layouts.app')

@section('content')
<div class=""><!--container class -->
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Usuarios
                @can('users.create')
                    <a href="{{ route('users.create')}}"
                    class="btn btn-sm btn-primary pull-right">Crear</a>
                @endcan
                </div>

                <div class="card-body" width="100%">
                   <table class="table table-striped table-hover table-bordered" width="100%">
                       <thead>
                           <tr>
                               <!--<th width="10px">ID</th>-->
                               <th>Nombre</th>
                               <th>E-mail</th>
                               <th>Región(es)</th>
                               <th>Sección(es)</th>
                               <th>Macrozona(s)</th>
                               <th colspan="5"><center>Opciones</center></th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($users as $user)
                           <tr>
                               <!--<td>{{ $user->id }}</td>-->
                               <td>{{ $user->name ?: '-' }}
                                @if($user->roles()->first() != null)
                                <strong>
                                [{{ $user->roles()->first()->name}}]
                                </strong>
                                @else

                                @endif
                              </td>
                               <td>{{ $user->email }}</td>
                               <td>
                                <ul>

                                @foreach($user->regiones as $region)
                                  <li>
                                    {{ $region->name }}
                                  </li>
                                @endforeach
                                </ul>
                               </td>
                               <td>
                                <ul>
                                  @foreach($user->secciones as $seccion)
                                  <li>
                                    {{ $seccion->name }}
                                  </li>
                                    @endforeach
                                  </ul>
                               </td>
                               <td>
                                <ul>
                                  @foreach($user->macrozonas as $macrozona)
                                  <li>
                                    {{ $macrozona->name}}
                                    @if($macrozona->rubro != null)
                                     > {{ $macrozona->rubro->name }}
                                     @if($macrozona->rubro->subrubro !=null)
                                     > {{ $macrozona->rubro->subrubro }}
                                     @else

                                     @endif
                                    @else

                                    @endif
                                  </li>
                                  @endforeach
                                </ul>
                               </td>
                               @can('users.show')
                               <td width="10px">
                                   <a href="{{ route('users.show', encrypt($user->id)) }}"
                                    class="btn btn-sm btn-primary">Ver</a>
                               </td>
                               @endcan
                               @can('users.edit')
                               <td width="10px">
                                   <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-sm btn-success">Editar</a>
                               </td>
                               @endcan


                               @can('users.edit')
                               <td width="10px">
                                   <a href="{{ route('users.macrozonas', $user->id) }}"
                                    class="btn btn-sm btn-success">Macrozonas</a>
                               </td>
                               @endcan
                               @can('users.edit')
                               <td width="10px">
                                   <a href="{{ route('users.secciones', $user->id) }}"
                                    class="btn btn-sm btn-success">Secciones</a>
                               </td>
                               @endcan
                               @can('users.destroy')
                               <td width="10px">
                                    {!! Form::open(['route' => ['users.destroy', $user->id],
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
