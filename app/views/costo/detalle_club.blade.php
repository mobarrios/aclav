<?php
$total=null;
?>


<div>


        <ul id="myTab2" class="nav nav-tabs">


        @foreach($torneos as $torneo)
        <!-- valida si el equipo esta en el torneo-->
    
            @foreach($torneo->Equipo as $equipo)

                @if($equipo->id == Session::get('equipo_id'))
                    <li>
                        <a href="#costo_{{$torneo->id}}" data-toggle="tab">{{$torneo->nombre_torneo}}</a>
                    </li>
                @endif          

            @endforeach

         

        @endforeach  
 
         </ul>
   

    <section class="panel">
        <div class="panel-body">
           
            <div id="myTabContent2" class="tab-content">
     
            @foreach($torneos as $torneo)
                    
                <div class="tab-pane" id="costo_{{$torneo->id}}">

                    @foreach($torneo->TorneoFase as $fase)

                                @foreach($fase->leg as $leg )
                                       {{$leg->nombre}}
                                        <table class="table table-condensed table-hover">
                                        <thead>
                                        <tr>
                                        <th>Pago</th>
                                        <th>Detalle</th>
                                        <th>Asginado</th>
                                        <th>$</th>
                                        <th></th>                   
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($leg->Partido as $partido)
                                            @foreach($partido->PartidoCosto as $costo)
                                                @foreach($costo->item  as $costo)
                                                     @if($costo->equipo_id == Session::get('equipo_id'))
                                                    <tr>
                                                    <td>
                                                        {{$costo->Equipo->nombre}}
                                                    </td>

                                                    <td>

                                                        {{$costo->CostoItem->detalle}}

                                                        @if($costo->CostoItem->detalle == 'Gastos por Traslado')
                                                             ( {{$costo->traslado_detalle}} ) 
                                                        @endif
                                                    </td>
                                                    <td>
                                               
                                                        @if($costo->arbitro_id != 0)
                                                          {{$costo->Arbitro->full_name}}
                                                        @endif
                                                       
                                                        @if($costo->supervisor_id != 0)
                                                         {{$costo->Supervisor->full_name}}
                                                        @endif
                                                    </td>
                                                    <td>
                                                            @if($costo->CostoItem->detalle == 'Gastos por Traslado')
                                                               $  {{$costo->traslado_importe}}
                                                            @else
                                                               $ {{$costo->CostoItem->importe}}
                                                            @endif
                                                        

                                                    </td>
                                                
                                                    <?php 
                                                     if($costo->CostoItem->detalle == 'Gastos por Traslado')
                                                     {
                                                        $total = $total + $costo->traslado_importe;
                                                     }

                                                    $total = $total + ($costo->cantidad * $costo->CostoItem->importe)

                                                    ?>   

                                               
                                                    </tr>

                                                    @endif

                                                @endforeach
                                            @endforeach
                                        @endforeach

                                       
                                        </tbody>
                                        <tfooter>
                                        <td colspan='3'>Total a Pagar </td>
                                        <td>$ {{$total}}</td>
                                        <?php $total = ""; ?>
                                        </tfooter>
                                        </table>

                                   @endforeach    

                            
                    @endforeach

                </div>
                @endforeach
                
             </div>
   
    </section>


</div>

