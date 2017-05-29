@extends('web.base')
@section('contenido')<br>
<div class="sections3">
<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">  
  <h4 class="media-heading"><p><font size="5" color="#f2293a">Posiciones</font></p></h4><br>
<h4 class="media-heading"><p><font size="5" color="#f2293a">{{$torneos->nombre_torneo}}</font></p></h4><br>
  <div class="blogtext">
      <figure> 
          <!-- Video Thumbnail Start --> 
         

   @foreach($fases as $fase)
   
    @if($fase->tipo_fase_id == 1)

      <h4><p><font size="3" color="#000000">{{$fase->nombre}}</font></p></h4>

        <div class="table-responsive">
          <table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
          <tbody>
            <tr>
            <td rowspan="2" align="center" class="info">RANK.</td>
            <td rowspan="2" align="center" class="info">COD.</td>
            <td rowspan="2" align="center" class="info">CLUB</td>
            <td rowspan="2" align="center" width="40" class="info">PTS.</td>
            <td colspan="3" align="center" class="info">PARTIDOS</td>
            <td colspan="3" align="center" class="info">SETS</td>
            <td colspan="3" align="center" class="info">TANTOS</td>
            <td rowspan="2" align="center" class="info">RACHA</td>
            </tr>
            <tr>
            <td align="center" class="info">GAN.</td>
            <td align="center" class="info">PER.</td>
            <td align="center" class="info">TOT.</td>
            <td align="center" class="info">GAN.</td>
            <td align="center" class="info">PER.</td>
            <td align="center" class="info">COEF.</td>
            <td align="center" class="info">GAN.</td>
            <td align="center" class="info">PER.</td>
            <td align="center" class="info">COEF.</td>
            </tr>      

            @foreach($fase->TablaPosicion as $tabla)

              @if($tabla->equipo_id != 15)
                <tr >
                <td align="center"  height="20" bgcolor="#eff0f2"><strong><?php echo $count ?></strong></td>
                <td align="left" ><font size="2"><strong>{{$tabla->Equipo->sigla}}</strong></td>
                <td align="left" ><font size="2">{{$tabla->Equipo->nombre}}</td>
                <td align="center" ><strong>{{$tabla->puntos}}</strong></td>
                <td align="center">{{$tabla->partido_ganado}}</td>
                <td align="center">{{$tabla->partido_perdido}}</td>
                <td align="center" >{{$tabla->partido_total}}</td>
                <td align="center" >{{$tabla->set_ganado}}</td>
                <td align="center" >{{$tabla->set_perdido}}</td>
                <td align="center">
                @if($tabla->set_coeficiente == '1000')
                  max.
                @else
                   {{$tabla->set_coeficiente}}
                @endif
                </td>
                <td align="center">{{$tabla->punto_ganado}}</td>
                <td align="center">{{$tabla->punto_perdido}}</td>
                <td align="center">{{$tabla->punto_coeficiente}}</td>
                <td align="right" >{{$tabla->racha}}</td>
                </tr>



                 <?php $count = $count + 1 ?>
                @endif
                  @endforeach


             <?php $count = '1'?>

            </tbody>
            </table>
            <br>
          </div>
            @endif
            @endforeach
        
     

</figure>

</div>
</div>
</div>
                   

  

                
      @endsection        
                        

                