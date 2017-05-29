@extends('template-2.template')

@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection


@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >
       
            @if(isset($model))
                 {{ Form::model($model, array('url'=>'torneos/editleg','class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
                 {{ Form::hidden('id',Input::old('id'))}}
            @else
                 {{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
            @endif

                <div class="form-group">
                    {{ Form::label('Nombre', 'Nombre', array('class' => 'control-label')) }}
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }}
                </div>

                <div class="form-group">

                {{ Form::label('Fecha Inicio', 'Fecha Inicio', array('class' => 'control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">

                        {{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}

                        <span class="input-group-btn">
                        <button class="btn btn-white add-on" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                        </span>
                    </div>

                </div>

                <div class="form-group">

                    {{ Form::label('Fecha Final', 'Fecha Final', array('class' => 'control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                        {{ Form::text('fecha_final', Input::old('fecha_final'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                        <span class="input-group-btn">
                        <button class="btn btn-white add-on" type="button">
                        <i class="fa fa-calendar"></i>
                        </button>
                        </span>
                    </div>
                </div>

                 <div class="form-group">

                   <table class="table">
                    <th>
                        <td>Equipos</td>
                    </th>
                    <tbody>
                        @if(isset($model))
            
                        @foreach($model->fase->equipo as $equipo)
                        <tr>
                            <td>{{$equipo->nombre}}</td>
                             <td>
                            
                                <a href="torneos/faseequiporemove/{{$equipo->id}}/{{$model->fase->id}}" class="del btn btn-xs btn-danger" >Borrar</a>
            

                             </td>
                        </tr>
                            @endforeach
                        @endif
                    </tbody>

                   </table>
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

