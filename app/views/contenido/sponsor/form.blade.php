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
	    {{ Form::label('label', 'URL', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('url', Input::old('url'), array('class' => 'form-control')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Imagen', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen') }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Tipo de Sponsor', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			  
			    {{ Form::select('estado',array('4' => 'Media','3' => 'Sponsor Tecnico','2' => 'Main Sponsor','1'=>'Sponsors Oficiales','0'=>'Auspiciantes') )}}

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