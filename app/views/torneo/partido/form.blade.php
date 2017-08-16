@extends('template-2.template')

@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection


@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >
       
                {{Form::open()}}

                <div class="form-group">
                    {{ Form::label('numero', 'Número de Partido', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text('numero_partido', Input::old('numero_partido'), array('class'=>'form-control' )) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Fecha Inicio', 'Fecha Inicio', array('class' => 'col-sm-2 control-label')) }}
                    <div class="input-group mg-b-md input-append date datepicker" data-date="{{date('d-m-Y')}}" data-date-format="dd-mm-yyyy">
                        {{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                        <span class="input-group-btn">
                            <button class="btn btn-white add-on" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                    </div>

                </div>

                 <div class="form-group">
                    {{ Form::label('hora', 'Hora', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text('hora', Input::old('hora'), array('class'=>'form-control' )) }}

    
                </div>

                <hr>
                  <div class="col-xs-12">
                      {{ Form::label('label', 'Local', array('class' => 'control-label')) }}  
                  </div>
                  <div class='row'>
                      <div class='col-xs-6'>
                            {{ Form::select('local_equipo_id', array('0'=>'Seleccionar') + $equipo  , Input::old('local_equipo_id') , array('class'=>'local_equipo_id form-control'))}}
                      </div>
                      <div class='col-xs-6'>
                           {{ Form::text('local_text' , Input::old('local_text') , array('class'=>'local_text form-control'))}}
                      </div>
                  </div>

                 <div class="col-xs-12">
                    {{ Form::label('label', ' Visitante', array('class' => 'col-sm-2 control-label')) }}
                  </div>
                  <div class='row'>
                      <div class='col-xs-6'>
                        {{ Form::select('visita_equipo_id', array('0'=>'Seleccionar') + $equipo , Input::old('visita_equipo_id') , array('class'=>'visita_equipo_id form-control'))}}
                      </div>
                       <div class='col-xs-6'>
                           {{ Form::text('visita_text' , Input::old('visita_text') , array('visita_text class'=>'form-control'))}}
                      </div>
                 </div>

                 <hr>

                <!-- desde designaciones 
                 <div class="form-group ">
                    {{ Form::label('label', ' Arbitro 1', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::select('arbitro_1_id', array('0'=>'Seleccionar') + $arbitro , Input::old('arbitro_1_id') , array('class'=>'form-control'))}}
                 </div>

                 <div class="form-group ">
                    {{ Form::label('label', ' Arbitro 2', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::select('arbitro_2_id', array('0'=>'Seleccionar') + $arbitro , Input::old('arbitro_2_id') , array('class'=>'form-control'))}}
                 </div>

                 <div class="form-group ">
                    {{ Form::label('label', 'Supervisor', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::select('supervisor_id', array('0'=>'Seleccionar') + $supervisor , Input::old('supervisor_id') , array('class'=>'form-control'))}}
                 </div>
                -->
                 <div class="form-group ">
                    {{ Form::label('label', 'Estadio', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::select('estadio_id', array('0'=>'Seleccionar') + $estadio , Input::old('estadio_id') , array('class'=>'form-control'))}}
                 </div>

                <div class="form-group ">
                    {{ Form::label('label', 'Riesgo Partido', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::select('riesgo', array('Bajo'=>'Bajo','Medio'=>'Medio','Alto'=>'Alto') , Input::old('riesgo') , array('class'=>'form-control'))}}
                 </div>

                <div class="form-group ">
                {{ Form::label('label', 'Televisado', array('class' => 'col-sm-2 control-label')) }}
                {{ Form::select('televisado', array('0'=>'No','1'=>'Web','2'=>'TV') , Input::old('televisado') , array('class'=>'form-control'))}}
                </div>

                <div class="form-group ">
                {{ Form::label('label', 'URL Televisado', array('class' => 'col-sm-2 control-label')) }}
                {{ Form::text('televisado_url',  Input::old('televisado_url') , array('class'=>'form-control'))}}
                </div>

                 <div class="form-group ">
                    {{ Form::label('label', 'Condicional', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::checkbox('condicional') }}
                </div>

                <div class="form-group">
                    <button class="btn btn-default" type="submit">Guardar</button>
               </div>
               
            {{Form::close()}} 
            </div>

   </div>
</section>
@endsection 


@section('extraJs')

    <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
    <script src="assets/quickSearch/jquery.quicksearch.js"></script>

    <script type="text/javascript">

    $('.local_text').on('click',function(){
       $('.local_equipo_id').val('0').selected();
    });

     $('.visita_text').on('click',function(){
       $('.visita_equipo_id').val('0').selected();
    });

     

    /*$(document).ready(function(){
        
        //$('#cantidadModificaciones').hide();

            $('#tipo_fase').change(function() {
                
            if ( this.value == 1 ) {
                
                    $("#cantidadModificaciones").show();
            }else{
                    $("#cantidadModificaciones").hide();
            }
            }); 
       
        });*/
    </script>

@endsection

