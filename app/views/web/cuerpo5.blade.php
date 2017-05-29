<div class="sections11">

</div>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="sections5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
      
            <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                    <font color="#5887bb" size="3">Noticias</font><br>
                      <ul class="unlist">

                           <li>
                              <a href="web/ampliarnoticia/{{NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->id}}" >{{NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->titulo}}</a>
                          
                           </li>
                            <li>
                              <a href="web/ampliarnoticia/{{NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->id}}" >{{NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->titulo}}</a>
                          
                           </li>

 <li>
                              <a href="web/ampliarnoticia/{{NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->id}}" >{{NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->titulo}}</a>
                          
                           </li>

 <li>
                              <a href="web/ampliarnoticia/{{NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->id}}" >{{NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->titulo}}</a>
                          
                           </li>



                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                    <font color="#5887bb" size="3">ACLAV Social</font><br>
                                <div class="crsl-item">
                                        <!-- Gallery Box Start -->
                                        <figure class="gallery">

                                            <a href="web/ampliarnoticia/{{$social_ultima->id}}">
                                                <img class="img-responsive" src="uploads/contenidos/noticias/{{$social_ultima->imagen}}" height="100%" />
                                            </a>
                                            
                                        </figure>
                                        <!-- Gallery Box End -->
                                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                  <font color="#5887bb" size="3">Fotos</font><br>
                                <div class="crsl-item">
                                        <!-- Gallery Box Start -->
                                        <figure class="gallery">
                                            <a href="web/galeriaprincipal">
                                                <img class="img-responsive" src="assets/estilosweb/images/img72.png" height="100%"/>
                                            </a>
                                           
                                        </figure>
                                        <!-- Gallery Box End -->
                                    </div>
                  </div>
                  
                  
            </div>
      </div>
    </div>
</body>