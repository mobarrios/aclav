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
	    {{ Form::label('label', 'Titulo', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('titulo', Input::old('titulo'), array('class' => 'form-control', 'maxlength'=>'100')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Copete', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('copete', Input::old('copete'), array('class' => 'form-control', 'maxlength'=>'195')) }}
			</div>
		</div>

		<div class="form-group">

	    {{ Form::label('Fecha Publicación', 'Fecha Publicación', array('class' => 'col-sm-2 control-label')) }}

	    <div class="col-sm-3">
	        
	        <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy">
	           
			{{ Form::text('fecha', Input::old('fecha'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
			    
		        <span class="input-group-btn">
		        	<button class="btn btn-white add-on" type="button">
		        		<i class="fa fa-calendar"></i>
		        	</button>
		        </span>
	        </div>
	    </div>
	</div>



		<div class="form-group">	  
	    {{ Form::label('label', 'Cuerpo', array('class' => 'col-sm-2 control-label')) }}

	   
		    <div class="col-sm-10">
			    {{ Form::textarea ('cuerpo', Input::old('cuerpo'), array('class' => 'form-control')) }}


			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Secciones', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::checkbox ('web_noticia')}} Noticias<br>
			    {{ Form::checkbox ('web_accion')}} Acciones (Marketing)<br>
			    {{ Form::checkbox ('web_social')}} Especiales<br>
			    {{ Form::checkbox ('web_especial')}} Aclav Social<br>
			    {{ Form::checkbox ('web_entrevista')}} Entrevista<br>
			</div>
		</div>
		
		<div class="form-group">	  
	    {{ Form::label('label', 'Club Relacionado', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">

				@foreach($clubes as $club)

					@if(isset($modelo))	
						@if(NoticiasClub::where('noticias_id','=',$modelo->id)->where('club_id','=',$club->id)->count() == 1 )
							
							{{Form::checkbox('club[]', $club->id, true)}} {{$club->nombre}}<br>	
						@else
							
							{{Form::checkbox('club[]' , $club->id)}} {{$club->nombre}}<br>	
						@endif

					@else
						
							{{Form::checkbox('club[]' , $club->id)}} {{$club->nombre}}<br>
					@endif
					
				@endforeach	

				
			</div>
		</div>
		
		<div class="form-group">	
		
	  
	    	{{ Form::label('label', 'Posición en la WEB', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
	

				{{Form::select('posicion_web',array('0'=>'Común','1'=>'Principal 1','2'=>'Principal 2','3'=>'Principal 3','4'=>'Principal 4','5'=>'Principal 5','6'=>'Principal 6','7'=>'Secundaria 1','8'=>'Secundaria 2','9'=>'Secundaria 3','10'=>'Secundaria 4'),null,array('class'=>'form-control'))}}
			</div>

		</div>



		<div class="form-group">	  
	    {{ Form::label('label', 'Fuente', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('fuente', Input::old('fuente'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen ', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen') }}
			</div>
		</div>
		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen 1', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen_1') }}
			</div>
		</div>
		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen 2', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen_2') }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen 3', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen_3') }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Imagen 4', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::file('imagen_4') }}
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