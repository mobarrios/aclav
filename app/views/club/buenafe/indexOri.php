@extends('template-2.template')




@section('content')
<section class="panel ">
    <div class="panel-body">
    
        <h4>Jugadores</h4>
        <table class="table table-bordered table-condensed table-responsive ">
            <thead>
                <tr>
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
                    <th>Estado</th>    
                    <th></th>               
                </tr>
            </thead>
            <tbody>
 
                           @foreach($lista as $list)  

                            @foreach($list->BuenaFe as $listas)

                                    <tr>
                                    <td>{{$listas->nro}}</td>
                                    @if($listas->jugador_id != 0)
                                        <td>


                                        @if($listas->jugador->Pais->nombre == 'Argentina')
                                            @if( (date('Y')) - (date("Y",strtotime($listas->jugador->fecha_nacimiento))) <= 21 )  
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
                                        <td></td>
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
                                    <td>
                                  
                                    <a href="buenafe/buscar/{{Crypt::encrypt($listas->id)}}" data-toggle="modal" data-target="#modal" class="btn  btn-xs"><span class="fa fa-plus-square"></span></a>

                                    <a href="buenafe/del/{{Crypt::encrypt($listas->id)}}" class="del"><span class="fa fa-times-circle"></span></a>
                                    
                                    </td>    
                                    </tr>
                                
                            @endforeach
                            @endforeach
                                  
 
               
            </tbody>
        </table>

        <h4> Staff </h4>

        <table class="table table-bordered table-condensed table-responsive ">
            <thead>
                <tr>
                    <th>Funcion</th>
                    <th>Funcion Real</th>
                    <th>Apellido Nombre</th>
                    <th>Nacimiento</th>
                    <th>DNI</th>
                    <th></th>               
                </tr>
            </thead>
            <tbody> 

                      @foreach($lista as $list)  

                            @foreach($list->BuenaFeStaff as $staff)

                          
                               
                                <tr> 

                                    <td></td>
                                
                                    @if($staff->oficial_id != 0)


                                        <td>{{$staff->Funcion->funcion}}</td>
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
                                    <td>
                                        <a href="buenafe/buscarstaff/{{Crypt::encrypt($staff->id)}}" data-toggle="modal" data-target="#modal" class="btn  btn-xs"><span class="fa fa-plus-square"></span>
                                        </a>
                                    </td>    
                                </tr>
                                
                              @endforeach     
                            @endforeach
                                  
 
               
            </tbody>
        </table>

    </div>
</section>
       
@endsection 
