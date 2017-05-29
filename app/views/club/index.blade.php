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

		@include($modulo.'.list')	

	@elseif($section == 'form')


					@include($modulo.'.form')

			    {{ Form::close() }}

	@else
		
		@include('config.'.$modulo.'.detalle')

	@endif

	</div>


@stop