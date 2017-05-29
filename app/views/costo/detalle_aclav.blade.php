@extends('template-2.template')

@section('content')
    


<div class="panel panel-default">

    <div class="panel-heading">
        
        <b>{{$modulo}}</b>
            
    </div>


    <div class="panel-body">

    


<?php
$total=null;
?>


<div>


   

    <section class="panel">
        <div class="panel-body">
           

                    @foreach($torneo_fase as $fase)

                                @foreach($fase->leg as $leg )
                                       <strong>{{$leg->nombre}}</strong>
                                        <table class="table table-condensed table-hover">
                                        <thead>
                                        <tr>
                                        <th>Partido N</th>
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
                                                     @if($costo->equipo_id == 0)
                                                    <tr>
                                                    <td>
                                                        {{$partido->numero_partido}}
                                                    </td>
                                                    <td>
                                                        ACLAV
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
                                        <td colspan='4'>Total a Pagar </td>
                                        <td>$ {{$total}}</td>
                                        <?php $total = ""; ?>
                                        </tfooter>
                                        </table>

                                   @endforeach    

                            
                    @endforeach

   
    </section>


</div>


    </div>

</div>


@endsection 

@stop


