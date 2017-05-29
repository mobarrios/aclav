@extends('template-2.template')

@section('content')

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>Jugadores</b>

		<div class="btn-group pull-right">
			<a href="jugador/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
			<a href="jugador"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</div>

	<div class="panel-body">



	@if($section == 'list')

		@include('jugador.list')	

	@elseif($section == 'form')

			@if ($action == "create")

			 	{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

			@else

				 {{ Form::model($jugador, array('class' => 'form-horizontal','role'=>'form', 'enctype' => 'multipart/form-data')) }}

			@endif

					@include('jugador.form.graldata')

			    {{ Form::close() }}

	@else
		
		@include('jugador.detalle')

	@endif

	</div>

</div>
@stop

