@extends('template-2.template')



@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-md-9" >
            
            {{Form::model( $model , array('url'=>'torneos/faseedit'))}}

                <div class="form-group">
                    {{ Form::label('Nombre Fase', 'Nombre Fase', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }}
                </div>
                <input type="hidden" value="{{$model->id}}" name="id">
            
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Guardar</button>
               </div>
               
            {{Form::close()}}
        </div>


        <div class="form-group col-xs-10">
            <form action='torneos/addequipo' method="POST">
                 {{ Form::hidden('torneos_id', $model->id) }}
                 {{ Form::label('Agregar Equipo',null, array('class' => 'control-label')) }}
                    <div class="input-group mg-b-md input-append">                       
                    {{ Form::select('equipos_id', $equipos, null,  array('class'=>'form-control')) }}
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
                @foreach($model->Equipo as $equipo)
                    <tr>
                        <td class="col-xs-1">{{$equipo->id}}</td>
                        <td>{{$equipo->nombre}}</td>
                        <td class="col-xs-1"><a href="torneos/equiposdel/{{$equipo->id}}" id="delEquipo"  class=" btn btn-sm btn-default"><strong>x</strong></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

   </div>
</section>
@endsection 


