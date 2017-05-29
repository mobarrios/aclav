@extends('template')


@section('container')


	@foreach ($equipo as $equipos)

		<ul>{{$equipos}}</ul>	

	@endforeach






@stop