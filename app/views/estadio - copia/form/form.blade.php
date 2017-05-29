
    {{ Form::label('label', 'Nombre Formulario', array('class' => 'control-label')) }}  
    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }} 
  
    {{ Form::label('label', 'Archivo', array('class' => 'control-label')) }}  
    {{ Form::file ('file') }} 

<br>
    
    {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}

    {{ Form::close() }}