<h5><strong>TUS DATOS DE GMAIL</strong></h5>
<hr>
<div class="form-group">
	{{ Form::label('email', 'E-Mail') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', ['class' => 'form-control']) }}
</div>
<hr>
<h5><strong>E-MAIL</strong></h5>
<hr>
<div class="form-group">
	{{ Form::label('email', 'Asunto') }}
	{{ Form::text('asunto', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('contenido', 'Contenido') }}
	{{ Form::textarea('contenido', null, ['class' => 'form-control', 'rows' => 7, 'cols' => 40]) }}
</div>
<hr>
<center>
	<div class="form-group">
		<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" onclick="this.disabled=true;this.form.submit();">Enviar</button>
	</center>

	</div>
</center>
