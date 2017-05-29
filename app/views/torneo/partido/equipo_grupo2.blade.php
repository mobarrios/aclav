@extends('template-2/template')


@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection


	@section('content')
		
	<section class="panel ">
	<div class="panel-body">
		<div class="col-md-9" >
			<form method="POST" class="form-horizontal" action="torneos/faseequipoadd" role="form">

			<div class="form-group">
				<label></label>

					<select name="torneo_fase_grupo_id" class="form-control">
						@foreach($fase_grupo as $grupo)
							<option value="{{$grupo->id}}">{{$grupo->numero_grupo}}</option>
						@endforeach	
					</select>
			</div>
			<div class="form-group">
				<label>Nombre de Grupo</label>
				<input type="text" name="nombreGrupo" class="form-control">	
			</div>

				<div class="form-group">
					<select  multiple="multiple" id="my-select" name="my-select[]" required="required">
						@foreach($torneo->Equipo as $equipo)      
							<option value='{{$equipo->id}}'>{{$equipo->nombre}}</option>
						@endforeach                                      
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>

			</form>

		</div>
	</div>
	</section>

@endsection

@stop

@section('extraJs')

    <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
    <script src="assets/quickSearch/jquery.quicksearch.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        
        $('#cantidadModificaciones').hide();

            $('#actualiza').click(function() {
          
            if ( $('#actualiza:checked').length > 0) {
                
                    $("#cantidadModificaciones").show();
            }else{
                    $("#cantidadModificaciones").hide();
            }
            }); 
       
        });
    </script>
@endsection