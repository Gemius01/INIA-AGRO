<div class="form-group">
	{{ Form::label('name', 'Nueva Contraseña') }}
	{{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group">

	<center>
	<button type="submit"  class="btn btn-sm btn-primary" name="submitBtn" id="saveButton" onclick="this.disabled=true;this.form.submit();" >Guardar</button>
	</center>

</div>