@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$sub->titulo}}</b>
			
	</div>
	<br>
	<br>

	<div>
	 {{ Form::open(array('class'=>'form-horizontal','enctype' => 'multipart/form-data')) }}

	<div class="form-group">	  
	{{ Form::label('label', 'Agregar Imagen', array('class' => 'col-sm-2 control-label')) }}
	    <div class="col-sm-10">
		    {{ Form::file('imagen') }}
		</div>
	</div>

	 	<div class="form-group">	  
	    {{ Form::label('label', 'Crédito', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('owner', Input::old('owner'), array('class' => 'form-control')) }}
			</div>
		</div>

	<div class="form-group">
		 {{ Form::label('', '', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::submit('aceptar',array('class'=>'btn btn-primary'))}}
		</div>
	</div>
	</div>

	

	<div class="panel-body">

	<div class="col-lg-12">
		
		@foreach($model as $models)

			<div class="col-lg-3">	

			<div>
				<a href="galeria/imagendel/{{Crypt::encrypt($models->id)}}"><i class="del fa fa-times"></i></a>
				<a href="uploads/contenidos/galeria/{{$galeria_id}}/{{$sub->id}}/{{$models->imagen}}" class="thumbnail">
					<img src="uploads/contenidos/galeria/{{$galeria_id}}/{{$sub->id}}/{{$models->imagen}}"  >
				</a>
			</div>

			</div>

		@endforeach
			
	</div>
				
	

	</div>

</div>


@endsection	

@stop