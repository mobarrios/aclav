@extends('template-2.template')


@section('content')

<section class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($modulo)}}</b>

		<div class="btn-group pull-right">
			<a href="perfiles/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
			<a href="perfiles"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</header>

	<div class="panel-body">


	@if($section == 'list')

		@include('config.perfiles.list')	

	@elseif($section == 'form')

			@if ($action == "create")

			 	{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

			@else

				 {{ Form::model($perfiles, array('class' => 'form-horizontal','role'=>'form')) }}

			@endif

					@include('config.perfiles.form.graldata')

			    {{ Form::close() }}

	@else
		
		@include('config.perfiles.detalle')

	@endif

	</div>

</section>
@stop

