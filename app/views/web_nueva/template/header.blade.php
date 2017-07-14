<header class="header">
          
      <!-- Header Secondary -->
      <div class="header__secondary">
        <div class="container">          
        <!-- Header Logo -->
            <div class="header-logo">
              <a href="{{route('inicio')}}"><img src="assets/webnueva/images/logo.png" alt="ACLAV" srcset="assets/images/logo@2x.png 2x" class="header-logo__img"></a>
            </div>
            <!-- Header Logo / End --> 
        </div>
      </div>
      <!-- Header Secondary / End -->
  
      <!-- Header Primary -->
      <div class="header__primary">
        <div class="container">
          <div class="header__primary-inner">  
            <!-- Main Navigation -->
            <nav class="main-nav clearfix">
              <ul class="main-nav__list">
                <li class=""><a href="#">Competencias</a>
                  <ul class="main-nav__sub">
                    @foreach(Temporada::with('Torneos')->where('actual','=',1)->get() as $temporada)
                      @foreach(Torneos::where('temporada_id',$temporada->id)->where('muestra_web','=',1)->orderBy('posicion','ASC')->get() as $torneo )  
                      <li><a href="{{route('calendario', $torneo->id)}}">{{$torneo->nombre_torneo}}</a></li>
                      @endforeach
                    @endforeach
                  </ul>
                </li>
                <li class=""><a href="#">Equipos</a>
                  <ul class="main-nav__sub">
                    <li><a href="{{route('participantes')}}">Participantes</a></li>
                    <li><a href="{{route('estadios')}}">Estadios</a></li>
                  </ul>
                </li>
                <li class=""><a href="{{route('jugadores')}}">Estadisticas</a></li>

                <li class=""><a href="#">Noticias</a>
                  <ul class="main-nav__sub">
                    <li><a href="{{route('noticias')}}">Noticias</a></li>
                    <li><a href="{{route('entrevistas')}}">Entrevistas</a></li>
                    <li><a href="{{route('especiales')}}">Especiales</a></li>
                    <li><a href="{{route('social')}}">ACLAV Social</a></li>                 
                    </ul>
                </li>
                
                <li class=""><a href="#">Multimedia</a>
                  <ul class="main-nav__sub">
                    <li><a href="{{route('galeria')}}">Fotogalerias</a></li>
                    <li><a href="{{route('descargas')}}">Descargas</a></li>
                    <li><a href="{{route('videos')}}">Videos</a></li>                  
                    </ul>
                </li>
                <li class=""><a href="#">Institucional</a>
                  <ul class="main-nav__sub">
                    <li><a href="{{route('historia')}}">Historia</a></li>
                    <li><a href="{{route('autoridades')}}">Autoridades ACLAV</a></li>
                    <li><a href="{{route('staff')}}">Staff ACLAV</a></li>
                    <li><a href="{{route('sponsors')}}">Sponsors</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                  </ul>
                </li></ul>
                <!-- Social Links -->
              <ul class="social-links social-links--inline social-links--main-nav">
                <li class="social-links__item">
                  <a href="https://www.facebook.com/VoleyACLAV" target="_new" class="social-links__link" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-links__item">
                  <a href="https://twitter.com/VoleyACLAV" target="_new" class="social-links__link" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-links__item">
                   <a href="https://www.instagram.com/voleyaclav/" class="social-links__link" target="_new" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="social-links__item">
                   <a href="https://www.youtube.com/user/VoleyACLAV" class="social-links__link" target="_new" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                </li>
              </ul>
            
              <!-- Social Links / End -->

            </nav>
            <!-- Main Navigation / End -->
          </div>
        </div>
      </div>
      <!-- Header Primary / End -->
  
    </header>