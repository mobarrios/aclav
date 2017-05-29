@extends('web.base')
@section('contenido')
<br>
                    <div class="sections3">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <!-- Video Box Start -->
                    <div class="blogtext">
                                
                                    <h4><p><font size="5" color="#f2293a">{{$noticia->titulo}}</font></p></h4>
                                    <h6>@foreach($noticia->club as $club)
                                      <img src="uploads/escudos/{{$club->escudo}}" width="40">
                                         
                                    



                                        @endforeach</h6>

                                    <div class="blogmetas">
                                        <ul>
                                            <font color="#000000"><li> <i class="fa fa-align-justify"></i> {{$noticia->fecha}}</font></li>
                                            
                                        </ul>
                                    </div>
                                    
                                    <div> <a href="uploads/contenidos/noticias/{{$noticia->imagen}}" class="lightbox-gallery img-responsive">
                                    <img style="float: left; margin-right:10px" src="uploads/contenidos/noticias/{{$noticia->imagen}}"  width="350"  class="thumbnail"></a><p><font size="3" color="#000000">{{$noticia->cuerpo}}</font></p></div>
                              </div>
                              <p><font size="3" color="#000000"><b>  {{$noticia->fuente}}</font></b></p>
                              <br><br><br><div class="fb-like" data-href="http://www.aclav.com.ar" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.aclav.com.ar" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                    <!-- Video Box End --> 
                </div>
                
                  

                
                
      @endsection
 