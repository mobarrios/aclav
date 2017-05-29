<section class="panel">
<header class="panel-heading">Formulario</header>

<div class="panel-body">

	<div class="form-group">
		{{ Form::label('sexo', 'Sexo', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('sexo', array('Masculino'=>'Masculino','Femenino'=>'Femenino') , Input::old('sexo') , array('class'=>'form-control')  );}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('nombreLabel', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' ,'placeholder' => 'Nombre Jugador')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('apellidoLabel', 'Apellido', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('apellido', Input::old('apellido'), array('class'=>'form-control' ,'placeholder' => 'Apellido Jugador')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('dniLabel', 'DNI/Pasaporte', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('dni', Input::old('dni'), array('class'=>'form-control' ,'placeholder' => 'DNI Jugador','required'=>'required')) }}
		</div>
	</div>
	
	<div class="form-group">
		{{ Form::label('paisLabel', 'Pais', array('class' => 'col-sm-2 control-label')) }}
	

		<div class="col-sm-10">
			{{ Form::select('pais_id', $pais , Input::old('pais_id') , array('class'=>'form-control')  );}}
		</div>
	</div>

	<div class="form-group">
        {{ Form::label('Nacimiento', 'Nacimiento', array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-10">
        <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
        {{ Form::text('fecha_nacimiento', Input::old('fecha_nacimiento'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
        <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
        </div>
     </div>
     </div>

		<div class="form-group">
			{{ Form::label('label', 'Altura (cm)', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('altura', Input::old('altura'), array('class'=>'form-control' ,'placeholder' => 'CM Jugador','required'=>'required')) }}
			</div>
		</div>
		<div class="form-group">
		{{ Form::label('label', 'Peso (kg)', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('peso', Input::old('peso'), array('class'=>'form-control' ,'placeholder' => 'KG Jugador','required'=>'required')) }}
		</div>
		</div>
		<div class="form-group">
		{{ Form::label('label', 'Alcance Remate (cm)', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('alcance_ataque', Input::old('alcance_ataque'), array('class'=>'form-control' ,'placeholder' => 'CM Jugador','required'=>'required')) }}
		</div>
		</div>
		<div class="form-group">
		{{ Form::label('label', 'Alcance Bloqueo (cm)', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('alcance_bloqueo', Input::old('alcance_bloqueo'), array('class'=>'form-control' ,'placeholder' => 'CM Jugador','required'=>'required')) }}
		</div>
		</div>
		<div class="form-group">
		{{ Form::label('label', 'Club Origen', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('club_origen', Input::old('club_origen'), array('class'=>'form-control' , 'maxlength'=>'35' ,'placeholder' => 'Club','required'=>'required')) }}
		</div>
		</div>
		<div class="form-group">
		{{ Form::label('label', 'Posicion', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('posicion',$posicion, Input::old('posicion'), array('class'=>'form-control' ,'placeholder' => 'Pos','required'=>'required')) }}
		</div>
		</div>

		<div class="form-group">
	  {{ Form::label('label', 'Foto', array('class' => 'col-sm-2 control-label')) }}  
		<div class="col-sm-10">
		 	{{ Form::file('foto') }} 
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





			                                    



	
