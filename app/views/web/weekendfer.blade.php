<div class="sections8">
  <div class="media-carousal">
      <div id="nav-00" class="crsl-nav">
          <a href="#" class="previous"><img src="assets/estilosweb/images/left.png" /></a>
          <a href="#" class="next"><img src="assets/estilosweb/images/right.png" /></a>
      </div>
      <div class="crsl-items" data-navigation="nav-00" data-crsl='{ "speed": 200, "autoRotate": 8000, "visible": 6 }'>
          <div class="crsl-wrap">

             
            @if($weekends != null)

              @foreach($weekends->partido as $partidoWeek)
                <div class="crsl-item">
                    
                    <figure class="gallery">

                        <table  width="100%" class="table" border="0" bordercolor="#999999">
                          <tr>                       
                            <td bgcolor="#FFFFFF"><center><b><small>{{date('D d/m',strtotime($partidoWeek->fecha_inicio))}}</small></b><b><small>  - {{$partidoWeek->hora}}</small></b></center></td>
                            </tr>
                          <tr>
                          <td>
                            <center><b><small>{{$partidoWeek->local_equipo_id->sigla}} vs {{$partidoWeek->visita_equipo_id->sigla}}</small></b><small></small></center></td>
                          </tr>
                         </table>
                  </figure>
                    
                </div>
              @endforeach
            @endif
             
          </div>
      </div>
  </div>
</div>