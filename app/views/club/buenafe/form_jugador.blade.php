

<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Editar Jugar</h4>
    </div>
    <div class="modal-body">

    {{ Form::model($model_jugador, array('url' => 'buenafe/editjugador')) }}

               <div class="form-group  col-xs-1">
                    {{ Form::label('Nro.', 'Nro.', array('class' => 'control-label')) }}
                    {{ Form::text('nro', Input::old('nro'), array('class'=>'form-control' )) }}
                </div>

                <div class="form-group col-xs-11">
                    {{ Form::label('Jugador', 'Jugador', array('class' => 'control-label')) }}   
               
                </div>


                <div class="form-group col-xs-4">
                    {{ Form::label('Desde', 'Desde', array('class' => 'control-label')) }}
                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_desde', Input::old('fecha_desde'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>


                <div class="form-group col-xs-4">
                    {{ Form::label('Hasta', 'Hasta', array('class' => 'control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_hasta', Input::old('fecha_hasta'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>

                <div class="col-xs-4" style="padding-top: 25px;" > 
                     <button class="btn btn-default" type="submit">Agregar</button>   
                </div>           
            
                 {{Form::close()}}
               </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>
