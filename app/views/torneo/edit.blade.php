@extends('template-2.template')

@section('extraCss')
    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
@endsection

@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >

                 {{ Form::model($model, array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}
           
                <div class="form-group col-xs-12">
                    {{ Form::label('Nombre Torneo', 'Nombre Torneo', array('class' => 'control-label')) }}
                    {{ Form::text('nombre_torneo', Input::old('nombre_torneo'), array('class'=>'form-control' )) }}
                </div>

                <div class="form-group col-xs-6">
                    {{ Form::label('Inicio', 'Inicio', array('class' => 'control-label')) }}

                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>


                <div class="form-group col-xs-6">
                    {{ Form::label('Final', 'Final', array('class' => 'control-label')) }}
                    <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_final', Input::old('fecha_final'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
                    <span class="input-group-btn"><button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button></span>
                    </div>
                </div>
               

                <div class="form-group col-xs-12">
                    {{ Form::label('label', 'Presentación O2', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::checkbox('presenta_o2', Input::old('presenta_o2') , null ) }}
                </div>


                <button class="btn btn-default" type="submit">Guardar</button>
            {{Form::close()}}
        </div>


        @if($model->CantidadPartidos() <= 0  )
                <div class="form-group col-xs-10">
                    <form action='torneos/addequipo' method="POST">
                         {{ Form::hidden('torneos_id', $model->id) }}
                         {{ Form::label('Agregar Equipo',null, array('class' => 'control-label')) }}
                            <div class="input-group mg-b-md input-append">                       
                            {{ Form::select('equipos_id', $equiposMasculino, null,  array('class'=>'form-control')) }}
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-default add-on"><span class="fa fa-plus"></span> </button> 
                            </span>
                    </form>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Equipos</th>
                         <th></th>
                    </thead>
                    <tbody>
                        @foreach($model->TorneoEquipo as $equipo)
                            <tr>
                                <td class="col-xs-1">{{$equipo->id}}</td>
                                <td>{{$equipo->Equipo->nombre}}</td>
                                <td class="col-xs-1"><a href="torneos/equiposdel/{{$equipo->id}}" id="delEquipo"  class=" btn btn-sm btn-default"><strong>x</strong></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        @endif



   </div>
</section>
@endsection 



