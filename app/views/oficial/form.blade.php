@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>
			
	</div>

	<div class="panel-body">

	     

	    @if ($action == "create")

	        {{ Form::open(array('class'=>'form-horizontal','enctype' => 'multipart/form-data')) }}
	 
	    @else
	    
	         {{ Form::model($modelo , array('class' => 'form-horizontal','enctype' => 'multipart/form-data')) }}

	    @endif

	    <div class="form-group">	  
	    {{ Form::label('label', 'Apellido', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('apellido', Input::old('apellido'), array('class' => 'form-control')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Nombre', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'DNI', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('dni', Input::old('dni'), array('class' => 'form-control')) }}
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
	    {{ Form::label('label', 'Funcion', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
		    	
			    {{ Form::select('funcion_id', $funciones , Input::old('funcion_id') , array('class'=>'form-control')  );}}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen') }}
			</div>
		</div>

		

		


		<div class="form-group">
			 {{ Form::label('', '', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
			{{ Form::submit('aceptar',array('class'=>'btn btn-primary'))}}
			</div>
		</div>



	    {{ Form::close() }}

	    <br>
	</div>

</div>


@endsection	

@stop