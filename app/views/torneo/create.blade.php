@extends('template-2.template')

@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection

@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >

            @if(isset($model))
                 {{ Form::model($model, array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
            @else
                 {{ Form::open(array('url'=>'torneos/edit','class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
            @endif



                <div class="form-group ">
                    {{ Form::label('Nombre Torneo', 'Nombre Torneo', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text('nombre_torneo', Input::old('nombre_torneo'), array('class'=>'form-control' )) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Inicio', 'Inicio', array('class' => 'col-sm-2 control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>


                <div class="form-group">
                    {{ Form::label('Final', 'Final', array('class' => 'col-sm-2 control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_final', Input::old('fecha_final'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>



                <hr>
                <div class="form-group">
                    {{ Form::label('O2', 'O2', array('class' => 'col-sm-2 control-label')) }}   
                    {{ Form::select('o2',array('0'=>'O2 Nuevo')+ $torneos , Input::old('o2') , array('class'=>'form-control') )}}
                </div>

                <div class="form-group">
                    {{ Form::label('label', 'Presentación O2', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::checkbox('presenta_o2', Input::old('presenta_o2') , null ) }}
                   
                </div>

                <hr>

                <!-- modifica o2

                 <div class="form-group">
                    {{ Form::label('label', 'Modifica O2', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::checkbox('actualiza_o2', Input::old('actualiza_o2') , null , array('id'=>'actualiza')) }}
                   
                </div>

                <div id="cantidadModificaciones" >

                    <div class="form-group">
                        {{ Form::label('label', 'Cant. Mod.', array('class' => 'col-sm-2 control-label')) }}
                        {{ Form::text('actualiza_o2_cantidad', Input::old('actualiza_o2_cantidad'),array('class'=>'form-control'))}}
                    </div>
                     <div class="form-group">
                        {{ Form::label('label', 'Desde', array('class' => 'col-sm-2 control-label')) }}
                             <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                            {{ Form::text('actualiza_o2_fecha_inicio', Input::old('actualiza_o2_fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                            <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('label', 'Hasta', array('class' => 'col-sm-2 control-label')) }}
                            <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                            {{ Form::text('actualiza_o2_fecha_final', Input::old('actualiza_o2_fecha_final'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                            <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                            </div>
                    </div>
                </div>
                -->




                <input type="hidden" name="temporada_id" value="{{$idTorneo}}">

                <div class="form-group">
                    {{ Form::label('Serie', 'Serie', array('class' => 'col-sm-2 control-label')) }}   
                    {{ Form::select('serie_id', $series , Input::old('serie_id') , array('class'=>'form-control'))}}
                </div>

                <div class="form-group">
                    
                 

                    <select  multiple="multiple" id="my-select" name="my-select[]" required="required">
                        <optgroup label='Liga Masculina'>
                            @foreach($equiposMasculino as $masculino)      
                                <option value='{{$masculino->id}}'>{{$masculino->nombre}}</option>
                            @endforeach                                      
                        </optgroup>

                        <optgroup label='Liga Femenina'>
                            @foreach($equiposFemenino as $femenino)      
                                <option value='{{$femenino->id}}'>{{$femenino->nombre}}</option>
                            @endforeach                                      
                        </optgroup>
                    </select>
                
                </div>

                <button class="btn btn-default" type="submit">Aceptar</button>
            </from>
        </div>

   </div>
</section>
@endsection 


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

