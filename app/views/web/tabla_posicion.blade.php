
  <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 
    <div class="table-responsive">


    @foreach($tablas as $fase)

      @if($fase->tipo_fase_id == 1)

       <table class="table" border="1" bordercolor="#dddddd">
        <tbody>
        <tr>
          <td colspan="6" align="center" bgcolor="#ffffff"><b><font color="#143965"><strong>{{$fase->nombre}}</strong></font></b></td>
        </tr>     
        <tr>
          <td align="center" class="info">RANK.</td>
          <td align="center" class="info">COD.</td>
          <td align="center" class="info">CLUB</td>
          <td align="center" width="40" class="info">PTS.</td>
        </tr>


      

        @foreach($fase->TablaPosicion as $tabla)
         @if($tabla->Equipo->id != 15) 
            <tr> 
              <td align="center"  height="20" bgcolor="#ffffff"><strong><?php echo $count ?></strong></td>
              <td align="left" bgcolor="#ced8e2"> <font color="#143965">{{$tabla->Equipo->sigla}}</font></td>
              <td align="left"  bgcolor="#ffffff"><font size="2">{{$tabla->Equipo->nombre}}</font></td>
              <td align="center" bgcolor="#ced8e2"><strong><font color="#143965">{{$tabla->puntos}}</font></strong></td>
            </tr>

            <?php $count = $count + 1 ?>
          @endif
        @endforeach
         <?php $count = '1'?>

        </tbody>
      </table>
          <br>
      @endif

    @endforeach

    
    </div>
  </div>