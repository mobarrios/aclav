@extends('template-2.template')


@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($modulo)}}</b>

		<div class="btn-group pull-right">
			<a href="{{$modulo}}/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
			<a href="{{$modulo}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</header>

	<div class="panel-body">


	@if($section == 'list')

		@include('config.'.$modulo.'.list')	

	@elseif($section == 'form')

			@if ($action == "create")

			 	{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

			@else

				 {{ Form::model($usuario, array('class' => 'form-horizontal','role'=>'form')) }}

			@endif

					@include('config.'.$modulo.'.form.graldata')

			    {{ Form::close() }}

	@else
		
		@include('config.'.$modulo.'.detalle')

	@endif

	</div>

</section>
@stop

