@extends('web.base')
@section('contenido')
<br>
    

<!-- Contents Section Started -->
                    <div class="sections1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div  class="table-responsive">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <div class="sections5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
      
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <font color="#5887bb" size="3">Noticias</font><br>
                      <ul class="unlist">
                        
                           <li>
                              <a href="#" ><font color="#ffffff" size="2"> {{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->titulo}}</font></a>
                          
                           </li>
                          
                      </ul>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <font color="#5887bb" size="3">Especiales</font><br>
                                <div class="crsl-item">
                                        <!-- Gallery Box Start -->
                                        <figure class="gallery">

                                            <a href="assets/estilosweb/images/img72.png" class="lightbox-gallery"> <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> </a>
                                            
                                        </figure>
                                        <!-- Gallery Box End -->
                                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <font color="#5887bb" size="3">Fotos</font><br>
                                <div class="crsl-item">
                                        <!-- Gallery Box Start -->
                                        <figure class="gallery">
                                            <a href="web/galeria">
                                                <img class="img-responsive" src="assets/estilosweb/images/img72.png" height="100%"/>
                                            </a>
                                           
                                        </figure>
                                        <!-- Gallery Box End -->
                                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <font color="#5887bb" size="3">Videos</font><br>
                                <div class="contenedor-video" > 
                                                <p>
                                                  {{$video_ultimo->object}}
                                                </p>
                                </div>
                  </div>
            </div>
      </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       
                    <!-- Contents Section End -->

                    