<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<br>
@foreach($recomendaciones as $recomendacion)
                       
@if($recomendacion->pivot->contenido != null)                   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                {{$recomendacion->name}}
                @if($recomendacion->rubro != null)
                > {{ $recomendacion->rubro->name }}
                 @if($recomendacion->rubro->subrubro != null)
                > {{ $recomendacion->rubro->subrubro}}
                @else
                @endif
                @else
                @endif
                </div>
                <div class="card-body">
                {!!$recomendacion->pivot->contenido!!}

                </div>
            </div>
        </div>
    </div>
</div>
@else
@endif
@endforeach 