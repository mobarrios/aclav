@extends('template-2.template')


@section('content')



<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$modulo}}</b>

		<div class="btn-group pull-right">
			<a href="modulos/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
			<a href="modulos"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</div>

	<div class="panel-body">



	@if($section == 'list')

		@include('config.modulos.list')	

	@elseif($section == 'form')

				@if ($action == "create")

					{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

				@else

					{{ Form::model($modulos, array('class' => 'form-horizontal','role'=>'form')) }}

				@endif

			@include('config.modulos.form.graldata')

				{{ Form::close() }}

	@elseif($section =='new')
	

		{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

			@include('config.modulos.form.form')

		{{ Form::close() }}


	@elseif($section == 'editar')




		{{ Form::model($modulos, array('class' => 'form-horizontal','role'=>'form')) }}

			@include('config.modulos.form.form')

		{{ Form::close() }}

	@else
		
		@include('config.modulos.detalle')

	@endif

	</div>

</div>
@stop

