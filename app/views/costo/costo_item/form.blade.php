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
	    {{ Form::label('label', 'Detalle', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('detalle', Input::old('detalle'), array('class' => 'form-control')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Importe', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('importe', Input::old('iporte'), array('class' => 'form-control','placeholder'=>'ej = xx.xx')) }}
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