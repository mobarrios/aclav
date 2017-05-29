@extends('template-2/template')

@section('content')
<div class="col-sm-9">

	<div class="col-xs-4 ">
		<a href="#" class="thumbnail">
			<img src="uploads/arbitro/{{$model->imagen}}" >
		</a>
	</div>
	<div class='col-xs-12'>
	
	<li>Apellido:     <strong> {{$model->apellido}} </strong> </li>
	<li>Nombre:    <strong> {{$model->nombre}} </strong> </li>
	<li>DNI:    <strong> {{$model->dni}} </strong> </li>
	<li>Fecha Nacimiento:    <strong> {{$model->fecha_nacimiento}} </strong> </li>
	<li>Provincia:    
				<strong>
					@if($model->Provincia != "")
						{{$model->Provincia->provincia_nueva_nombre }}
					@endif
				</strong> 
	</li>
	<li>Ciudad:    <strong>
					@if($model->Ciudad != "")
						{{$model->Ciudad->ciudad_nueva_nombre }}
					@endif

					
				
	</strong> </li>
	<li>Dirección:    <strong> {{$model->direccion}} </strong> </li>
	<li>Celular:    <strong> {{$model->celular}} </strong> </li>

	<li>Teléfono:    <strong> {{$model->telefono}} </strong> </li>
  	<li>Email:    <strong> {{$model->email}} </strong> </li>
	
	</div>

</div>
@endsection
@stop