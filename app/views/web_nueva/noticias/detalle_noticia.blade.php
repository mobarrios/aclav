@extends('web_nueva.template')
@section('site-content')
  <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Article -->
            <article class="card card--lg post post--single">
          
 <!-- inicio slider chaco -->
              <article class="card card--lg post post--single">

              <figure class="post__thumbnail">
                <div id="chacslider-container1">
                	<div class="ws_images">
                    <ul>
                		  <li><img src="assets/webnueva/images/noti001.jpg" alt="noti001" title="noti001" id="wows1_0"/></li>
                		  <li><img src="assets/webnueva/images/noti002.jpg" alt="noti002" title="noti002" id="wows1_1"/></li>
                		  <li><img src="assets/webnueva/images/noti003.jpg" alt="noti003" title="noti003" id="wows1_2"/></li>
                		  <li><img src="assets/webnueva/images/noti004.jpg" alt="noti004" title="noti004" id="wows1_3"/></li>
                		  <li><img src="assets/webnueva/images/noti005.jpg" alt="noti005" title="noti005" id="wows1_4"/></li>		
                	  </ul>
                  </div>

                	<div class="ws_thumbs">
                    <div>
                		  <a href="#" title="noti001"><img src="assets/webnueva/images/noti001.jpg" alt="" /></a>
                		  <a href="#" title="noti002"><img src="assets/webnueva/images/noti002.jpg" alt="" /></a>
                		  <a href="#" title="noti003"><img src="assets/webnueva/images/noti003.jpg" alt="" /></a>
                		  <a href="#" title="noti004"><img src="assets/webnueva/images/noti004.jpg" alt="" /></a>
                		  <a href="#" title="noti005"><img src="assets/webnueva/images/noti005.jpg" alt="" /></a>		
                	  </div>
                  </div>

	                <div class="ws_shadow"></div>
	              </div>
              </figure>
 <!-- fin slider chaco -->

              <div class="card__content">
                
                <header class="post__header">
                  <h3 class="post-author__name"><p>Los destacados de la temporada: Lazo y Poglajen, mejores puntas</p></h3>
                  
                	<div class="post-author__info">
                          <h5 class="post-author__name"><p>Prensa ACLAV</p></h5>
                    </div>
				</header>

                <div class="post__content">
                  <p><font size="3">Nicolas Lazo y Cristian Poglajen, dos hombres de Seleccion nacional que le aportan jerarquia a la Liga Argentina de Voleibol Banco Nacion, tambien estuvieron entre los puntos mas altos de la edicion que finalizo dias atras. Avanzando con la conformacion del Equipo Ideal de la temporada, surgen el sanjuanino de UPCN San Juan Voley Club y el olimpico de Lomas Voley, como los mejores en el rol de puntas receptores de todo el torneo.</font> 
					</p>

                  <div class="spacer"></div>

                  <p><font size="3">Lazo, nacido en 1995, en esta Liga supero con claridad la prueba de la titularidad en UPCN, que defendia su hexacampeonato y aposto por este talento sanjuanino para armar su alineacion titular. De los puntas que disputaron la serie final, fue el de mayor cosecha de puntos (350 entre la Fase Regular y los Playoff), con ademas un 43% de eficiencia en la ofensiva. Solo seis receptores puntas, comparando dentro de partidos de Liga, superaron el 40% en ese rubro y Lazo fue uno de ellos.
                  </font>
                  </p>

                  <div class="spacer"></div>
                  <p><font size="3">Su compa?ero en los extremos de este Equipo Ideal fue Poglajen, que volvio al voleibol argentino tras experiencias en Belgica y Brasil, ademas de una presencia imborrable en los Juegos Olimpicos de Rio 2016. Luego de llegar a Lomas como un refuerzo resonante, ayudo a la obtencion de la Copa ACLAV y, en lo individual, fue el punta con mas goleo de todos en partidos de Liga: 395 anotaciones. Asimismo, en recepcion mantuvo su eficiencia al 59%, con un 43% de intervenciones perfectas.
                  </font>
                  </p>

                  <div class="spacer"></div>

                  <p><font size="3">Lazo recibio el trofeo de manos de Marcelo Roman, ex jugador consagrado en Liga y tambien en Seleccion, y actualmente integrante de JuAVA, Jugadores Asociados del Voleibol Argentino. Poglajen, por su parte, fue reconocido por Camilo Soto, entrenador de Gigantes del Sur y parte del staff tecnico de la Seleccion Argentina en la actualidad.</font></p>
                </div>

                
              </div>
            </article>
            <!-- Article / End -->

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')	
          <!-- Sidebar / End -->
        </div>

    </div>
</div>
    
      
@endsection   
@section('javascript')
 <script type="text/javascript" src="assets/webnueva/js/slider.js"></script>
  <script type="text/javascript" src="assets/webnueva/js/slider_script.js"></script>
@endsection