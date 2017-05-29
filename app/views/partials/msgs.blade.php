@if ($errors->count() > 0)
	<div class="alert alert-danger">
		Han ocurrido los siguientes errores:<br /><br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if (Session::has('success'))

	<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Éxito:</strong> {{ Session::get('success') }}
	</div>
@endif

@if (Session::has('danger'))
	<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Error:</strong> {{ Session::get('danger') }}
	</div>
@endif

@if (Session::has('warning'))
	<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Alerta:</strong> {{ Session::get('warning') }}
	</div>
@endif