@extends('template-2.template')

@section('content')
<section class="panel ">

    <div class="panel-heading text-center">
    <h4><strong >{{$torneo->nombre_torneo}}</strong> ( O2 : # {{$lista->id}} )</h4>
    </div>
    <div class="panel-body">
        <h3 class="text-center bg-default"> JUGADORES </h3>
    <div class="panel col-lg-12">
         
            @if(isset($model_jugador))
                {{Form::model($model_jugador,array('url' => 'buenafe/editjugador','id'=>'form_jugadores'))}}
                {{Form::hidden('edit','edit')}}
                {{Form::hidden('id',$model_jugador->id)}}
            @else
                {{ Form::open(array('url' => 'buenafe/editjugador','id'=>'form_jugadores')) }}
            @endif
                {{Form::hidden('o2_id',$o2_id)}}

               <div class="form-group  col-xs-1">
                    {{ Form::label('Nro.', 'Nro.', array('class' => 'control-label')) }}
                    {{ Form::text('nro', Input::old('nro'), array('class'=>'form-control' , 'required')) }}
                </div>

                <div class="form-group col-xs-11">
                    {{ Form::label('Jugador', 'Jugador', array('class' => 'control-label')) }}   
                        @if(isset($model_jugador))
                            {{ Form::select('jugador_id', array(''=>'Seleccionar')+$jugadores , Input::old('jugador_id') , array('class'=>'form-control','disabled','required'))}}
                        @else
                            {{ Form::select('jugador_id', array(''=>'Seleccionar')+$jugadores , Input::old('jugador_id') , array('class'=>'form-control','required'))}}
                        @endif
                </div>


                <div class="form-group col-xs-4">
                    {{ Form::label('Desde', 'Desde', array('class' => 'control-label')) }}
                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy" >                       
                    {{ Form::text('fecha_desde', Input::old('fecha_desde'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy','required')) }}
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
                     <button id="submit" class="btn btn-default" >Agregar</button>   
                </div>           
            
                 {{Form::close()}}
               </div>
        
    
        <h5>Jugadores Actuales</h5>

        <div class="table-responsive">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nro.</th>
                    <th>Juvenil</th>
                    <th>Pos.</th>
                    <th>Apellido Nombre</th>
                    <th>Nacimiento</th>
                    <th>Documento</th>
                    <th>Altura(cm)</th>
                    <th>Peso(kg)</th>
                    <th>Remate(cm)</th>
                    <th>Bloqueo(cm)</th>
                    <th>Club de Pertenencia</th>
                    <th>Nacionalidad</th>     
                    <th>Desde</th>   
                    <th>Hasta</th> 
                    <th></th>               
                </tr>
            </thead>
            <tbody>
 

                @foreach($lista->BuenaFe as $listas)

                  @if(!$listas->borrado)
            
                    @if(strtotime($listas->fecha_hasta)  >= strtotime(date('d-m-Y')) || $listas->fecha_hasta == 'actual')
                        <tr>
                        <td>{{$listas->id}}</td>
                         <td>{{$listas->nro}}</td>
                           
                            @if($listas->jugador_id != 0)
                                <td>
                                    @if($listas->jugador->Pais->nombre == 'Argentina')
                                        @if((date('Y',strtotime($temporada->fecha_inicio))) - (date("Y",strtotime($listas->jugador->fecha_nacimiento))) <= 21 )  
                                            Si
                                        @else
                                            No
                                        @endif      
                                    @else
                                        No
                                    @endif                                        
                                </td>
                                <td>{{$listas->jugador->posicion}}</td>
                                <td>

                              <a href='jugador/edit/{{ Crypt::encrypt($listas->jugador->id) }}' class="btn btn-xs btn-link">{{$listas->jugador->apellido}} {{$listas->jugador->nombre}}</a>
                                </td>
                                <td>{{$listas->jugador->fecha_nacimiento}}</td>
                                <td>{{$listas->jugador->dni}}</td>
                                <td>{{$listas->jugador->altura}}</td>
                                <td>{{$listas->jugador->peso}}</td>
                                <td>{{$listas->jugador->alcance_ataque}}</td>
                                <td>{{$listas->jugador->alcance_bloqueo}}</td>
                                <td>{{$listas->jugador->club_origen}}</td>
                                <td>{{$listas->jugador->Pais->nombre}}</td>
                                <td>{{$listas->fecha_desde}}</td>
                                <td>{{$listas->fecha_hasta}}</td>    
                    
                            @else
                            <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                            <td>
                              <!--
                               <a href="buenafe/buscar/{{Crypt::encrypt($listas->id)}}" data-toggle="modal" data-target="#modal" class="btn  btn-xs"><span class="fa fa-plus-square"></span></a>
                               -->
                             <a href="buenafe/del/{{Crypt::encrypt($listas->id)}}" class="del btn btn-xs btn-danger"><span class="fa fa-times-circle"></span></a>

                            <a href='buenafe/edit/{{Crypt::encrypt($o2_id)}}/{{Crypt::encrypt($torneo->id)}}/{{Crypt::encrypt($listas->id)}}/jugador' class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                            
                            </td>    
                            </tr>
                    @endif
                @endif
                @endforeach
                      
 
               
            </tbody>
        </table>
        <h5>Jugadores dados de baja.</h5>
        <table class="table table-hover">
         <thead>
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>     
                    <th></th>   
                    <th></th> 
                    <th></th>               
                </tr>
            </thead>
        <tbody>
        

            @foreach($lista->BuenaFe as $listas)
            
                @if(!$listas->borrado)
                    @if($listas->fecha_hasta != 'actual')
                        @if(strtotime($listas->fecha_hasta)  <= strtotime(date('d-m-Y')) )
                        <tr>
                         <td>{{$listas->id}}</td>
                         <td>{{$listas->nro}}</td>
                        
                                <td>

                                    @if($listas->jugador->Pais->nombre == 'Argentina')
                                        @if((date('Y',strtotime($temporada->fecha_inicio))) - (date("Y",strtotime($listas->jugador->fecha_nacimiento))) <= 21 )  
                                            Si
                                        @else
                                            No
                                        @endif      
                                    @else
                                        No
                                    @endif                                        
                                </td>
                                <td>{{$listas->jugador->posicion}}</td>
                                <td >{{$listas->jugador->apellido}} {{$listas->jugador->nombre}}</td>
                                <td>{{$listas->jugador->fecha_nacimiento}}</td>
                                <td>{{$listas->jugador->dni}}</td>
                                <td>{{$listas->jugador->altura}}</td>
                                <td>{{$listas->jugador->peso}}</td>
                                <td>{{$listas->jugador->alcance_ataque}}</td>
                                <td>{{$listas->jugador->alcance_bloqueo}}</td>
                                <td>{{$listas->jugador->club_origen}}</td>
                                <td>{{$listas->jugador->Pais->nombre}}</td>
                                <td>{{$listas->fecha_desde}}</td>
                                <td>{{$listas->fecha_hasta}}</td>    

                            
                            <td style="width: 100px;">
                              <!--
                               <a href="buenafe/buscar/{{Crypt::encrypt($listas->id)}}" data-toggle="modal" data-target="#modal" class="btn  btn-xs"><span class="fa fa-plus-square"></span></a>
                               -->
                             <a href="buenafe/del/{{Crypt::encrypt($listas->id)}}" class="del btn btn-xs btn-danger"><span class="fa fa-times-circle"></span></a>

                            <a href='buenafe/edit/{{Crypt::encrypt($o2_id)}}/{{Crypt::encrypt($torneo->id)}}/{{Crypt::encrypt($listas->id)}}/jugador' class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                            
                            </td>      
                            </tr>
                            @endif
                    @endif
                @endif
            @endforeach
            </tbody>

        </table>
        </div>
        <hr>

        <h3 class="text-center bg-default"> STAFF </h3>
            <div class="panel col-xs-12">
        
                @if(isset($model_staff))
                    {{Form::model($model_staff,array('url' => 'buenafe/editstaff'))}}
                    {{Form::hidden('edit','edit')}}
                    {{Form::hidden('id',$model_staff->id)}}
                @else
                    {{ Form::open(array('url' => 'buenafe/editstaff')) }}
                @endif


                    {{Form::hidden('o2_id',$o2_id)}}

               <div class="form-group  col-xs-6">
                    {{ Form::label('Funcion', 'Funcion', array('class' => 'control-label')) }}
                    {{ Form::select('oficial_funcion_id', array( '' => 'Seleccionar' ) + $funcion ,Input::old('oficial_funcion_id'), array('class'=>'form-control' ,'required')) }}
                </div>

                  <div class="form-group col-xs-6">
                    {{ Form::label('Oficial', 'Oficial', array('class' => ' control-label')) }}   
                    {{ Form::select('oficial_id', array(''  => 'Seleccionar' ) + $oficiales , Input::old('oficial_id') , array('class'=>'form-control','required'))}}
                </div>


                <div class="form-group col-xs-4">
                    {{ Form::label('Desde', 'Desde', array('class' => 'control-label')) }}
                    <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">                       
                    {{ Form::text('fecha_desde', Input::old('fecha_desde'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy','required')) }}
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
            

        <table class="table table-hover ">
            <thead>
                <tr>
                    <th># </th>
                    <th>Funcion </th>
                    <th>Apellido Nombre</th>
                    <th>Nacimiento</th>
                    <th>DNI</th>
                    <th>Desde</th>
                    <th>Hasta</th>   
                    <th></th>               
                </tr>
            </thead>
            <tbody> 


            @foreach($lista->BuenaFeStaff as $staff)

                @if(!$staff->borrado)

                    @if( strtotime($staff->fecha_hasta)  >= strtotime(date('d-m-Y')) || $staff->fecha_hasta == 'actual' )
                        <tr> 
        
                        @if($staff->oficial_id != 0)

                            <td>
                                 {{$staff->id}}
                            </td>
                            <td>
                                 {{$staff->Funcion->funcion}}
                            </td>
                            <td>

                            <a href='oficial/edit/{{ Crypt::encrypt($staff->Oficial->id) }}' class="btn btn-xs btn-link">
                                {{ isset($staff->Oficial->apellido) ? $staff->Oficial->apellido: '' }}
                                {{ isset($staff->Oficial->nombre) ? $staff->Oficial->nombre: '' }}
                                </a>

                            </td>
                            <td>
                                {{ isset($staff->Oficial->fecha_nacimiento) ? $staff->Oficial->fecha_nacimiento: '' }}
                            </td>
                            <td>
                                {{ isset($staff->Oficial->dni) ? $staff->Oficial->dni: '' }}
                            
                            </td>  
                            <td>
                                {{ $staff->fecha_desde }}
                            
                            </td>   
                            <td>
                                {{ $staff->fecha_hasta }}
                            
                            </td>                                     
                        @else
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        @endif

                        <td style="width: 100px;">
                        <a href="buenafe/delstaff/{{Crypt::encrypt($staff->id)}}" class="del btn btn-xs btn-danger"><span class="fa fa-times-circle"></span></a>

                        <a href='buenafe/edit/{{Crypt::encrypt($o2_id)}}/{{Crypt::encrypt($torneo->id)}}/{{Crypt::encrypt($staff->id)}}/staff' class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                        </td>    
                        </tr>
                        @endif
                    @endif
              @endforeach
            </tbody>
        </table>

         <h5>Staff dado de baja.</h5>
        <table class="table table-hover">
         <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>       
                </tr>
            </thead>
        <tbody>
        

            @foreach($lista->BuenaFeStaff as $staff)

                @if(!$staff->borrado)
                    @if($staff->fecha_hasta != 'actual')
                        @if(strtotime($staff->fecha_hasta) <= strtotime(date('d-m-Y')))
                        <tr>
                            @if($staff->oficial_id != 0)
                                <td>
                                    {{$staff->id}}
                                </td>
                                <td>
                                    {{$staff->Funcion->funcion}}
                                </td>
                                <td>
                                    {{ isset($staff->Oficial->apellido) ? $staff->Oficial->apellido: '' }}
                                    {{ isset($staff->Oficial->nombre) ? $staff->Oficial->nombre: '' }}
                                </td>
                                <td>
                                     {{ isset($staff->Oficial->fecha_nacimiento) ? $staff->Oficial->fecha_nacimiento: '' }}
                                </td>
                                <td>
                                     {{ isset($staff->Oficial->dni) ? $staff->Oficial->dni: '' }}
                                </td>      
                                  <td>
                                     {{ $staff->fecha_desde }}
                                </td> 
                                  <td>
                                     {{ $staff->fecha_hasta }}
                                </td>                               
                            @else
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            @endif
                                <td style="width: 100px;">
                                <a href="buenafe/delstaff/{{Crypt::encrypt($staff->id)}}" class="del btn btn-xs btn-danger"><span class="fa fa-times-circle"></span></a>

                                <a href='buenafe/edit/{{Crypt::encrypt($o2_id)}}/{{Crypt::encrypt($torneo->id)}}/{{Crypt::encrypt($staff->id)}}/staff' class="btn btn-xs btn-success"><span class="fa fa-edit"></span></a>
                                </td>    
                        </tr>
                        @endif
                    @endif
                @endif

            @endforeach
            </tbody>

        </table>
        </div>

        <hr>
                <h3 class="text-center bg-default"> UNIFORME </h3>

                @if(isset($lista))
                    {{Form::model($lista,array('url' => 'buenafe/uniforme'))}}
                    {{Form::hidden('edit','edit')}}
                
                @else
                    {{ Form::open(array('url' => 'buenafe/uniforme')) }}
                @endif
                
                {{Form::hidden('o2_id',$o2_id)}}

                <div>
                    <div class="col-xs-4 panel ">
                        <div class=" panel-heading">
                           <strong>Claro </strong>
                        </div>
                        <div class="panel panel-body">
                            <label>Camiseta</label>
                            {{Form::text('uniforme_claro_camiseta',null, array('class'=>'form-control'))}}
                             <label>Short</label>
                            {{Form::text('uniforme_claro_short',null, array('class'=>'form-control'))}}

                        </div>
                    </div>
                    <div class="col-xs-4 panel ">
                        <div class=" panel-heading">
                           <strong>Oscuro </strong>
                        </div>
                        <div class="panel panel-body">
                            <label>Camiseta</label>
                            {{Form::text('uniforme_oscuro_camiseta',null, array('class'=>'form-control'))}}
                             <label>Short</label>
                            {{Form::text('uniforme_oscuro_short',null, array('class'=>'form-control'))}}
                        </div>
                    </div><div class="col-xs-4 panel ">
                        <div class=" panel-heading">
                           <strong>TV </strong>
                        </div>
                        <div class="panel panel-body">
                            <label>Camiseta</label>
                            {{Form::text('uniforme_tv_camiseta',null, array('class'=>'form-control'))}}
                             <label>Short</label>
                            {{Form::text('uniforme_tv_short',null, array('class'=>'form-control'))}}
                        </div>
                    </div>

                </div>

                {{Form::submit('Guardar Uniforme', array('class'=>'btn btn-xs pull-right'))}}
                {{Form::close()}}
    </div>
    <hr>

    <a href="buenafe/presentar/{{$o2_id}}" class="presentar_o2 btn btn-success form-control">Presentar O2</a>
</section>
       
       @section('extraJs')
        <script type="text/javascript">
           
            $('#submit').submit(function(e){
                return false;
            });
        </script>
       @endsection
      


@endsection 



