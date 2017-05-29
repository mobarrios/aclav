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
	    {{ Form::label('label', 'Url/Modulo', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('titulo', Input::old('titulo'), array('class' => 'form-control', 'maxlength'=>'100')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Error/Modificación', array('class' => 'col-sm-2 control-label')) }}

	   
		    <div class="col-sm-10">
			    {{ Form::textarea ('cuerpo', Input::old('cuerpo'), array('class' => 'form-control')) }}


			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Observaciones Programador', array('class' => 'col-sm-2 control-label')) }}

	   
		    <div class="col-sm-10">
			    {{ Form::textarea ('observaciones', Input::old('observaciones'), array('class' => 'form-control')) }}


			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Seccion donde corregir', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::checkbox ('web_noticia')}} Web<br>
			    {{ Form::checkbox ('web_accion')}} Sistema<br>
			</div>
		</div>
		

		<div class="form-group">	  
	    {{ Form::label('label', 'Estado', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			  
			    {{ Form::select('estado',array('1' => 'Pendiente','0'=>'Finalizado','2'=>'Stand By') )}}

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