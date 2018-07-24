<informe xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="appxsd.xsd">
<resumenes fecha_inicio="{{ $publicacion->año }}-{{ $publicacion->mes->inicio }}" 
		   fecha_termino="{{ $publicacion->año }}-{{ $publicacion->mes->fin }}">
	
@foreach($array as $a)
@if($a->pivot->resumen != null)
<registro id="{{ $a->pivot->id }}" 
		  region="14" 
		  macrozona="{{ $a->name }}"
		  @if($a->rubro != null)
		  rubro="{{ $a->rubro->name }}"
			  @if($a->rubro->subrubro != null)
			  	tipo="{{$a->rubro->subrubro}}"
			  @else
			  @endif
		  @else
		  @endif
		  
		  autor="{{ $a->pivot->autor}}" 
		  mail="{{ $a->pivot->email }}"
		  >
<![CDATA[

 {{$a->pivot->resumen }}

]]>
</registro>
@else
@endif
@endforeach
</resumenes>
</informe>