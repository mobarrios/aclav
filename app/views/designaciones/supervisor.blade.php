

 <div class="modal-content">   
    <div class="modal-header">
      Designaciones Supervisor
     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>

    <div class="modal-body">
  
	{{ Form::open(array('url'=>'designaciones/super' ,'class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

    <div class="form-group">

   {{  Form::label('label', 'Estado', array('class' => 'control-label')) }}  
    {{ Form::select('estado', array('1' => 'Aceptar' ,'2' => 'Rechazar'),array('class'=>'form-control selectpicker ' ))}}
    
<br>
	
    {{ 	Form::label('label', 'Motivo', array('class' => 'control-label')) }}  
    {{  Form::text('observaciones', Input::old('observaciones'),array('class' => ' control-label')) }}  

</div>
	
    
    {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}

    {{ Form::close() }}

      </div>
    </div>