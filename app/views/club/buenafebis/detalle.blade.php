@extends('template-2.template')

@section('content')
<section class="panel ">
    <div class="panel-heading">
     Partido Nro. {{$partido->numero_partido}} <strong>{{$partido->local_text ? $partido->local_text :$partido->local_equipo_id->sigla}}</strong> vs. <strong>{{$partido->visita_text ? $partido->visita_text :$partido->visita_equipo_id->sigla}}</strong>
     <i class="pull-right">Fecha : {{$partido->fecha_inicio}}</i>

    </div>
    <div class="panel-body">



    <a href="buenafebis/repo" class="btn btn-xs btn-danger " target="_blank">Imprimir PDF</a>
    <form action="buenafebis/guardar" method="POST">

        <h4>Jugadores</h4>

        <div class="table-responsive">
        <table class="table table-bordered table-condensed table-responsive ">
            <thead>
                <tr>
                    <th> </th>
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
                                
                </tr>
            </thead>
            <tbody>
 

                            @foreach($lista as $l )

                            @foreach($l->BuenaFe as $listas)

                            @if(!$listas->borrado)
                                 @if( $listas->fecha_hasta >= date('d-m-Y') )
                                        @if($listas->habilitaciones->condicion != 'NO HABILITADO')

                                    <tr>
                                    <td>
                                       
                                       @if(BuenaFeBis::where('partido_id','=',Session::get('partido_id'))->where('buena_fe_id','=',$listas->id)->count() == 1 )
                                            <input type="checkbox" checked="checked" name="jugador_id[{{$listas->id}}]">
                                       @else
                                             <input type="checkbox" name="jugador_id[{{$listas->id}}]">
                                       @endif
                                       
                                       
                                    </td>
                                    <td>{{$listas->nro}}</td>
                                        @if($listas->jugador_id != 0)


                                            <td>
                                            @if($listas->jugador->Pais->nombre == 'Argentina')
                                                @if( (date('Y',strtotime($temporada->fecha_inicio)) )- (date("Y",strtotime($listas->jugador->fecha_nacimiento))) <= 21 )  
                                                    Si
                                                @else
                                                    No
                                                @endif      
                                            @else
                                            No
                                            @endif                                        
                                            </td>
                                            <td>{{$listas->jugador->posicion}}</td>
                                            <td>{{$listas->jugador->apellido}} {{$listas->jugador->nombre}}</td>
                                            <td>{{$listas->jugador->fecha_nacimiento}}</td>
                                            <td>{{$listas->jugador->dni}}</td>
                                            <td>{{$listas->jugador->altura}}</td>
                                            <td>{{$listas->jugador->peso}}</td>
                                            <td>{{$listas->jugador->alcance_ataque}}</td>
                                            <td>{{$listas->jugador->alcance_bloqueo}}</td>
                                            <td>{{$listas->jugador->club_origen}}</td>
                                            <td>{{$listas->jugador->Pais->nombre}}</td>
                                          
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
                                        @endif
                                     
                                    </tr>
                                    @endif
                                @endif
                                
                        @endif
                                @endforeach
                            @endforeach
 
               
            </tbody>
        </table>
        </div>
        <hr>

        <h4> Staff </h4>
         

        <table class="table table-bordered table-condensed table-responsive ">
            <thead>
                <tr>
                     <th> </th>
                    <th>Funcion </th>
                    <th>Apellido Nombre</th>
                    <th>Nacimiento</th>
                    <th>DNI</th>              
                </tr>
            </thead>
            <tbody> 


                            @foreach($lista as $s)
                                @foreach($s->BuenaFeStaff as $staff)

                                @if(!$staff->borrado)
                                    @if( $staff->fecha_hasta >= date('d-m-Y') )   
                                          @if($staff->habilitacionesStaff->condicion != 'NO HABILITADO')
                                        <tr>             
                                            @if($staff->oficial_id != 0)
                                                <td>
                                                @if(BuenaFeStaffBis::where('partido_id','=',Session::get('partido_id'))->where('buena_fe_staff_id','=',$staff->id)->count() == 1 )
                                                <input type="checkbox" checked="checked" name="staff_id[{{$staff->id}}]">
                                                @else
                                                <input type="checkbox" name="staff_id[{{$staff->id}}]">
                                                @endif



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
                                            @else

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            @endif
                                             
                                        </tr>
                                        @endif
                                    @endif
                                @endif
                                 @endforeach
                                  
                            @endforeach
 
               
            </tbody>
        </table>

    </div>
    <button class="btn btn-success form-control">Guardar</button>
</form>
</section>
       
@endsection 

