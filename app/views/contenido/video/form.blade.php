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
			    {{ Form::text ('titulo', Input::old('titulo'), array('class' => 'form-control')) }}
			</div>
		</div>

	    <div class="form-group">	  
	    {{ Form::label('label', 'Codigo Video', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('object', Input::old('object'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Copete', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::textarea ('copete', Input::old('copete'), array('class' => 'form-control')) }}
			</div>
		</div>

		<div class="form-group">	  
	    {{ Form::label('label', 'Club Relacionado', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">

				@foreach($clubes as $club)

					@if(isset($modelo))	
						@if(VideosClub::where('video_id','=',$modelo->id)->where('club_id','=',$club->id)->count() == 1 )
							
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
	    {{ Form::label('label', 'Fuente', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('fuente', Input::old('fuente'), array('class' => 'form-control')) }}
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