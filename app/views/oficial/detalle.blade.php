@extends('template-2/template')

@section('content')
<div class="pd-md ">
	    <img src="uploads/oficial/{{$model->imagen}}" class="avatar avatar-lg img-rounded">
	</div>
<div class="col-sm-9">


	<li>Apellido:     <strong> {{$model->apellido}} </strong> </li>
	<li>Nombre:    <strong> {{$model->nombre}} </strong> </li>
	<li>DNI/Pasaporte:    <strong> {{$model->dni}} </strong> </li>
	<li>Fecha de Nacimiento:    <strong> {{$model->fecha_nacimiento}} </strong> </li>
  	<li>Función:    <strong> {{$model->funcion->funcion}} </strong> </li>
	

</div>
@endsection
@stop