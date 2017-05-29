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
	    {{ Form::label('label', 'Email', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('email', Input::old('email'), array('class' => 'form-control')) }}
			</div>
		</div>



		<div class="form-group">	  
	    {{ Form::label('label', 'Cargo', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('cargo', Input::old('cargo'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Club Actual', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('club_actual', Input::old('club_actual'), array('class' => 'form-control')) }}
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