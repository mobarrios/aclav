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
	    {{ Form::label('label', 'Resolucion', array('class' => 'col-sm-2 control-label')) }}

	   
		    <div class="col-sm-10">
			    {{ Form::text ('resolucion', Input::old('resolucion'), array('class' => 'form-control')) }}


			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Sancionado:', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('jugador', Input::old('jugador'), array('class' => 'form-control', 'maxlength'=>'100')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Cantidad de Fechas:', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('cant_fecha', Input::old('cant_fecha'), array('class' => 'form-control', 'maxlength'=>'100')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Sancion', array('class' => 'col-sm-2 control-label')) }}

	   
		    <div class="col-sm-10">
			    {{ Form::textarea ('sancion', Input::old('sancion'), array('class' => 'form-control')) }}


			</div>
		</div>

		<div class="form-group">

	    {{ Form::label('Vencimiento de la Sancion:', 'Vencimiento de la Sancion', array('class' => 'col-sm-2 control-label')) }}

	    <div class="col-sm-3">
	        
	        <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy">
	           
			{{ Form::text('vencimiento_sanc', Input::old('vencimiento_sanc'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
			    
		        <span class="input-group-btn">
		        	<button class="btn btn-white add-on" type="button">
		        		<i class="fa fa-calendar"></i>
		        	</button>
		        </span>
	        </div>
	    </div>
	</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Categoria', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-2">
			    {{ Form::select('estado',array('1' => 'Masculino','0'=>'Femenino'),null,array('class'=>'form-control') )}}

			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Temporada', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-2">
			    {{ Form::select('temporada_id',$temporadas,null,array('class'=>'form-control') )}}

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