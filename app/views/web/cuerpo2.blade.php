
<br>
    <p> 
        @if(isset($banner_superior))
        <a href="{{$banner_superior->url}}" target="_blank">
          <img src="uploads/contenidos/banner/{{$banner_superior->imagen}}" width="100%" />
      </a>
        @endif
    </p>

<!-- Contents Section Started -->
                    <div class="sections1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div  class="table-responsive">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->titulo}}</font></p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->titulo}}</font></p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->titulo}}</font><p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->titulo}}</font></p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->titulo}}</font></p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-22">
                                <figure class="gallery">  <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->imagen}}" class="img-responsive image-cropper" /> 
                                    <figure class="backcolor8">
<div class="commentslist">  
<ul>  
<li><a href="#" ><p><font color="#ffffff" size="3"> {{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->titulo}}</font></p></a>
</li>
</ul>
</figure>
                                    <figcaption class="backcolor1">
                                        <h7><a href="web/ampliarnoticia/ {{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->id}}"> {{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->copete}}</a></h7>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       
                    <!-- Contents Section End -->

  <p>  
 
    @if(isset($banner_inferior))
    <a href="{{$banner_inferior->url}}" target="_blank">
        <img src="uploads/contenidos/banner/{{$banner_inferior->imagen}}"  width="100%" />
    </a>
    @endif    
    </p>