<div id="sidebar" class="sidebar col-md-4">

            <?php
            $banner_superior = Banner::where('posicion',1)->get();
            ?>
            @foreach($banner_superior as $banner)

            <aside class="widget widget--sidebar card widget-popular-posts">
             <a href="{{$banner->url}}" target="_blank"><img src="uploads/contenidos/banner/{{$banner->imagen}}"></a>
            </aside>



            @endforeach
          
            <!-- Widget: Standings -->
            <?php
            $tablas = TorneoFase::where('tabla_web',1)->get();
            $count  =  '1';
            ?>

            @foreach($tablas as $fase)
            <aside class="widget card widget--sidebar widget-standings">
              <div class="widget__title card__header card__header--has-btn">
                <h4><p>{{$fase->nombre}}</p></h4>
              </div>
              <div class="widget__content card__content">
                <div class="table-responsive">
                  @if($fase->tipo_fase_id == 1)
                  <table class="table table-hover table-standings">
                    <thead>
                      <tr>
                        <th><p>Posiciones</p></th>
                        <th><b>PTS</p></th>
                        <th><p>G</p></th>
                        <th><p>P</p></th>
                        <th><p>J</p></th>                        
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($fase->TablaPosicion as $tabla)

                    @if($tabla->Equipo->id != 15) 
                      <tr>
                        <td>
                          <div class="team-meta">
                            <figure class="team-meta__logo">
                              <img src="uploads/escudos/{{$tabla->Equipo->escudo}}" alt="">
                            </figure>
                            <div class="team-meta__info">
                              <h6 class="team-meta__name"><p>{{$tabla->Equipo->nombre}}</p></h6>
                            </div>
                          </div>
                        </td>
                        <td><span class="glossary__abbr"><font size=4>{{$tabla->puntos}}</font></span></td>
                        <td><p>{{$tabla->partido_ganado}}</p></td>
                        <td><p>{{$tabla->partido_perdido}}</p></td>
                        <td><p>{{$tabla->partido_total}}</p></td>                        
                      </tr>
                      <?php $count = $count + 1 ?>
                      @endif
                      @endforeach
                      <?php $count = '1'?>
                    
                    </tbody>
                  </table>
                  @endif
                </div>
              </div>
            </aside>
            @endforeach  

            <?php
            $banner_medio = Banner::where('posicion',4)->get();
            ?>
            @foreach($banner_medio as $banner)
            <aside class="widget widget--sidebar card widget-popular-posts">
                <a href="{{$banner->url}}" target="_blank"><img src="uploads/contenidos/banner/{{$banner->imagen}}"></a>
            </aside>
            @endforeach

            <!-- Widget: Twitter -->
            <aside class="widget widget--sidebar card widget-twitter">
              <div class="widget__title card__header">
                <h4><p>Twitter</p></h4>
              </div>
              <div class="widget__content card__content">
                <ul>
                  <a class="twitter-timeline"  href="https://twitter.com/VoleyACLAV"  data-widget-id="487689182769192960">Tweets por @VoleyACLAV</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </ul>
              </div>
            </aside>
            <!-- Widget: Twitter / End -->

            <!-- Widget: Featured Player - Alternative Extended -->
            <aside class="widget card widget--sidebar widget-player widget-player--alt">
              <div class="widget__title card__header">
                <h4><p>Jugador de la Fecha</p></h4>
              </div>
                <h4><img src="uploads/contenidos/goleador/{{$goleador->imagen}}"></h4>
             </aside>
            <!-- Widget: Featured Player - Alternative Extended / End -->

            <!-- Widget: Popular News -->
            <?php
            $banner_inferior = Banner::where('posicion',0)->get();
            ?>
            @foreach($banner_inferior as $banner)
            <aside class="widget widget--sidebar card widget-popular-posts">
               <a href="{{$banner->url}}" target="_blank"><img src="uploads/contenidos/banner/{{$banner->imagen}}"></a>
            </aside>
            @endforeach
            
            <!-- Widget: Popular News / End -->
</div>