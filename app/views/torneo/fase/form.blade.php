@extends('template-2.template')

@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection


@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >
            <form  action="torneos/faseadd">

                <div class="form-group">
                    {{ Form::label('Nombre Fase', 'Nombre Fase', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('label', 'Tipo de Fase', array('class' => 'col-sm-2 control-label')) }}

                    {{ Form::select('tipo_fase_id', $tipo_fase , Input::old('tipo_fase_id') , array('class'=>'form-control','id'=>'tipo_fase'))}}
               </div>

                <div class="form-group">
                    {{ Form::label('label', 'Sistema de Puntos', array('class' => 'col-sm-2 control-label')) }}

                    {{ Form::select('sistema_punto_id', $sistema_punto , Input::old('sistema_punto_id') , array('class'=>'form-control'))}}
               </div>

                <div class="form-group">

    
                    <select  multiple="multiple" id="my-select" name="my-select[]" required="required">
                       
                            @foreach($equipos_torneo as $equipo)      
                                
                                 <option value='{{$equipo->id}}'>{{$equipo->nombre}}</option>

                            @endforeach                                      

                    </select>
                
                </div>
            
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Guardar</button>
               </div>
               
            </from>
        </div>

   </div>
</section>
@endsection 


@section('extraJs')

    <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
    <script src="assets/quickSearch/jquery.quicksearch.js"></script>

    <script type="text/javascript">
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

