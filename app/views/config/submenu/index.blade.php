@extends('template-2.template')


@section('content')

<section  class="panel ">

	<header class="panel-heading">
		
		<b>{{Str::upper($modulo)}}</b>

		<div class="btn-group pull-right">

		
			<a href="submenu/new/{{$menu->id}}" data-toggle="modal" data-target="#modal" class="btn  btn-xs"><span class="fa fa-plus-square"></span> Agregar</a>

			<a href="{{$modulo}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</header>

	<div class="panel-body">

		@include('config.'.$modulo.'.list')	

	</div>

</section>
@stop

