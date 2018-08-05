<div class="form-group">
	{{ Form::label('name', 'Mes de la Publicación') }}
	{!! Form::select('mes_id', $meses, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{{ Form::label('name', 'Año de la Publicación') }}
	{{ Form::number('año', null, ['class' => 'form-control']) }}
	@if($errors->has('año'))
	@foreach($errors->get('año',":message") as $error)
	<p class="alert alert-danger alert-dismissible" >{{$error}}</p>
	@endforeach
	@endif
</div>
<div class="form-group">
	<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" id="saveButton" onclick="this.disabled=true;this.form.submit();" >Guardar</button>
	</center>
</div>
     <div class="modal fade" id="progressDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<center>
	        	<h4>Espere mientras se crea la publicación</h4>
	        	<p>puede tardar unos segundos</p>
				<img src="{{ URL::to('/') }}/images/lg.-text-entering-comment-loader.gif" width="100" height="100" border="0">
	    	</center>
	      </div>
	    </div>
	  </div>
	</div>
<script>
$( document ).ready(function() {
    $("#saveButton").click(function() {
			setTimeout(function () {
        $('#progressDialog').modal('show');
    }, 1000);
   	});
});
</script>
