<section class="panel">
<header class="panel-heading">Formulario</header>

<div class="panel-body">


	<div class="form-group">
		{{ Form::label('nombreLabel', 'Grupo', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('grupo', Input::old('grupo'), array('class'=>'form-control' ,'placeholder' => 'Nombre Grupo')) }}
		</div>
	</div>


	<div class="form-group">
		{{ Form::label('label', 'De Equipo', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::checkbox('is_equipo', Input::old('is_equipo')) }}
		</div>

	</div>

	<div class="form-group">
		{{ Form::label('label', 'Arbitro', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::checkbox('is_arbitro', Input::old('is_arbitro')) }}
		</div>

	</div>

	<div class="form-group">
		{{ Form::label('label', 'Supervisor', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::checkbox('is_supervisor', Input::old('is_supervisor')) }}
		</div>

	</div>


	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>

	    <div class="col-sm-4">
	        {{ Form::submit('Guardar', array('class' => 'btn')) }}
	    </div>
	</div>


</div>
</section>





			                                    



	
