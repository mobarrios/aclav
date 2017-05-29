@extends('template-2.template')

@section('content')


<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>Formularios</b>

		<div class="btn-group pull-right">
			<a href="formularios/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
			<a href="formularios"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
		</div>
			
	</div>

	<div class="panel-body">

	@if($section == 'list')

		@include('formulario.list')	

	@elseif($section == 'form')

		@if ($action == "create")

			{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

		@else

			{{ Form::model($modelo, array('class' => 'form-horizontal','role'=>'form', 'enctype' => 'multipart/form-data')) }}

		@endif

		@include('formulario.form.form')

			{{ Form::close() }}

	@endif
		
		
	</div>

</div>
@endsection