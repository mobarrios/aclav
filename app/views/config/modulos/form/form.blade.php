


	<div class="form-group">
		{{ Form::label('label', 'Modulo', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::text('modulo', Input::old('modulo'), array('class'=>'form-control' ,'placeholder' => 'Modulo')) }}
		</div>
			</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>

	    <div class="col-sm-4">
	        {{ Form::submit('Guardar', array('class' => 'btn')) }}
	    </div>
	</div>




