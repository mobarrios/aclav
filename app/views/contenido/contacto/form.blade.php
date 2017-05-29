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
	    {{ Form::label('label', 'Telefono', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Direccion', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Email', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::textarea ('email', Input::old('email'), array('class' => 'form-control')) }}
			</div>
		</div>



		<div class="form-group">	  
	    {{ Form::label('label', 'Mapa', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('mapa', Input::old('mapa'), array('class' => 'form-control')) }}
			</div>
		</div>

		

		<div class="form-group">	  
	    {{ Form::label('label', 'Estado', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			  
			    {{ Form::select('estado',array('1' => 'Activo','0'=>'Inactivo') )}}

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