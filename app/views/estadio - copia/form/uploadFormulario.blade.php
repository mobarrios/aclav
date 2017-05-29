

 <div class="modal-content">   
    <div class="modal-header">
      Subir Formulario
     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>

    <div class="modal-body">

	{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
	
    {{ 	Form::label('label', 'Archivo', array('class' => 'control-label')) }}  
    {{ 	Form::file ('file') }} 

	<br>
    
    {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}

    {{ Form::close() }}

      </div>
    </div>