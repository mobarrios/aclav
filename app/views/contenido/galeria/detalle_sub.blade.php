@extends('template-2.template')

@section('content')
	

<div class="panel panel-default">

	<div class="panel-heading">
		
		<b>{{$sub->titulo}}</b>
			
	</div>
	<br>
	<br>

	<div>
	 {{ Form::open(array('class'=>'form-horizontal','enctype' => 'multipart/form-data')) }}

	<div class="form-group">	  
	{{ Form::label('label', 'Agregar Imagen', array('class' => 'col-sm-2 control-label')) }}
	    <div class="col-sm-10">
		    {{ Form::file('imagen') }}
		</div>
	</div>

	 	<div class="form-group">	  
	    {{ Form::label('label', 'Crédito', array('class' => 'col-sm-2 control-label')) }}

		    <div class="col-sm-10">
			    {{ Form::text ('owner', Input::old('owner'), array('class' => 'form-control')) }}
			</div>
		</div>

	<div class="form-group">
		 {{ Form::label('', '', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::submit('aceptar',array('class'=>'btn btn-primary'))}}
		</div>
	</div>
	</div>

	

	<div class="panel-body">

	<div class="col-lg-12">
		
		@foreach($model as $models)

			<div class="col-lg-3">	

			<div>
				<a href="galeria/imagendel/{{Crypt::encrypt($models->id)}}"><i class="del fa fa-times"></i></a>
				<a href="uploads/contenidos/galeria/{{$galeria_id}}/{{$sub->id}}/{{$models->imagen}}" class="thumbnail">
					<img src="uploads/contenidos/galeria/{{$galeria_id}}/{{$sub->id}}/{{$models->imagen}}"  >
				</a>
				
				 <div class="input-group">
			       {{ Form::text ('owner', $models->owner , array('class' => 'form-control', 'id' => $models->id)) }}
			      <span class="input-group-btn">
			        <button class="btn btn-secondary btn_edit" type="button" data-id="{{$models->id}}"><span class="fa fa-edit"></span></button>
			      </span>
			    </div>
			</div>

			</div>

		@endforeach
			
	</div>
				
	

	</div>

</div>


@endsection	
@section('extraJs')
<script type="text/javascript">
	

	$(".btn_edit").click(function(){
		if (confirm("Desea Editar La Imagen?"))
		{
		
			  var image_id    = $(this).data("id");
			  var input_owner = ($("#"+image_id ).val());
		
			  /*
		    	 $.get('getTorneos/'+$(this).val() ,function(data){
                    
                });
			*/
		      $.ajax({
				type: "POST",
				url : "postImage",
				data :  {input_owner: input_owner, image_id: image_id },
				success : function(data){
					alert("Se ha editado correctamente la imagen.");
				},
				error: function(e) {
				    alert(e.responseText);
				  }
		    });
		}
	    
	});


	
</script>

@endsection


@stop

