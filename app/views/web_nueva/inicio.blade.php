@extends('web_nueva.template')
@section('css')
<style>
.modal{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  opacity: 0.5;
  display:none;
}
.ventana{
  min-width:300px;
  max-width:600px;
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.ventana span{
  color:#fff;
  background-color:#000;
  padding:.2em .5em .3em .5em;
  font-family:Arial;
  font-weight:bold;
  border:2px solid #fff;
  border-radius:50%;
  position:absolute;
  top:-15px;
  right:-20px;
  cursor:pointer;
}

.ventana button{
  top: 4px;
  right: 4px;
  position: absolute;
}

.fade.in {
  background-color: #08080861 !important;
}
.modal-body {
  padding: 0px !important;
}


</style>
@endsection
@section('site-content')


<div class="site-contentchico">


{{-- @if($partidosDiarios->count() != 0) --}}

    <div class="container">
     <div class="owl-carousel col-lg-12">
     
      @if($partidosDiarios->count() > 0)
         @include('web_nueva.partials.resultados')
         @include('web_nueva.partials.pxp')
         @include('web_nueva.partials.proximos')
      @endif  

       @if($partidosDiarios->count() == 0)
         @include('web_nueva.partials.resultados')
         @include('web_nueva.partials.pxp')
         @include('web_nueva.partials.proximos')
      @endif  
        
      </div>
    </div>

  {{-- @endif --}}

</div>        

    <!-- Pushy Panel action-->
<aside class="pushy-panel">
  <div class="pushy-panel__inner">
    <header class="pushy-panel__header">
      <div class="pushy-panel__logo">
        <a href="{{route('inicio')}}"><img src="assets/webnueva/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="ACLAV"></a>
      </div>
    </header>
    <div class="pushy-panel__content">

      
      <!-- Widget: Banner -->
      <aside class="widget widget--side-panel widget-banner">
        <div class="widget__content">
          <figure class="widget-banner__img">
            <a href="#"><img src="assets/webnueva/images/samples/banner.jpg" alt="Banner"></a>
          </figure>
        </div>
      </aside>
      <!-- Widget: Banner / End -->

    </div>
    <a href="#" class="pushy-panel__back-btn"></a>
  </div>
</aside>
    <!-- Pushy Panel / End -->
    
  <!-- Featured Posts Slider
  ================================================== -->

<div class="content">

  <div class="slick posts posts-slider posts--slider-top-news">
    <!-- Slide #1 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-1">  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #9e69ee">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
        <div class="posts__inner">          
          <h2 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->id )}}"><font color="#ffffff"><p> {{ NoticiasPosicion::where('posicion_web','=',1)->first()->Noticias->titulo }}</p></font></a></h2>          
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>
    <!-- Slide #1 / End -->  
    <!-- Slide #2 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-2">  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #9e69ee">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
    
        <div class="posts__inner">          
          <h2 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->id )}}"><font color="#ffffff"><p> {{ NoticiasPosicion::where('posicion_web','=',2)->first()->Noticias->titulo }}</p></font></a></h2>          
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>
    <!-- Slide #2 / End -->  
    <!-- Slide #3 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-1">  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #f92552">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
        <div class="posts__inner">          
          <h3 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->id )}}"><font color="#ffffff"><p>{{NoticiasPosicion::where('posicion_web','=',3)->first()->Noticias->titulo}}</p></font></a></h3>
          <footer class="posts__footer">           
          </footer>
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>
    <!-- Slide #3 / End -->  
    <!-- Slide #4 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-3">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #0fe3ab">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
        <div class="posts__inner">          
          <h3 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->id )}}"><font color="#ffffff"><p>{{NoticiasPosicion::where('posicion_web','=',4)->first()->Noticias->titulo}}</p></font></a></h3>
          <footer class="posts__footer">           
          </footer>
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>
    <!-- Slide #4 / End -->  
    <!-- Slide #5 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-1">
  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #0fe3ab">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
        <div class="posts__inner">          
          <h3 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->id )}}"><font color="#ffffff"><p>{{NoticiasPosicion::where('posicion_web','=',5)->first()->Noticias->titulo}}</p></font></a></h3>
          <footer class="posts__footer">           
          </footer>
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>

    <!-- Slide #5 / End -->
    <!-- Slide #6 -->
    <div class="slick__slide">  
      <div class="posts__item posts__item--category-1">  
        <!-- Main Image -->
        <figure class="posts__thumb">
          <img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->imagen}}" alt="" class="duotone-img" data-gradient-map="#282840, #0fe3ab">
        </figure>
        <!-- Main Image / End -->  
        <!-- Post Content -->
        <div class="posts__inner">          
          <h3 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->id )}}"><font color="#ffffff"><p>{{NoticiasPosicion::where('posicion_web','=',6)->first()->Noticias->titulo}}</p></font></a></h3>
          <footer class="posts__footer">           
          </footer>
        </div>
        <!-- Post Content / End -->  
      </div>  
    </div>

  </div>  

<!-- fin slider ================================================== -->   
</div>
    
</div>

<div class="site-content-index">
      <div class="container">

        <div class="row">

          <!-- Content -->
          <div class="content col-md-8">
              
            <!-- Featured News -->
            <div class="card card--clean">
              <a href="{{$banner_superior->url}}" target="_blank"><h4><img src="uploads/contenidos/banner/{{$banner_superior->imagen}}"></h4></a>
              <div class="card__content">

              </div>
            </div>
            <!-- Post Area 1 -->
            <div class="posts posts--cards post-grid row">

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">                    
                    <a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->id )}}"><img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->imagen}}" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">                    
                    <time datetime="2016-08-23" class="posts__date">{{NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->fecha}} </time>
                    <h6 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->id )}}"><p>{{ Str::limit(NoticiasPosicion::where('posicion_web','=',7)->first()->Noticias->titulo, $limit=50, $end='...') }}</p></a></h6>                    
                  </div>                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">                    
                    <a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->id )}}"><img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->imagen}}" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">                    
                    <time datetime="2016-08-23" class="posts__date">{{NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->fecha}}</time>
                    <h6 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->id )}}"><p>{{ Str::limit(NoticiasPosicion::where('posicion_web','=',8)->first()->Noticias->titulo,$limit=50, $end='...')}}</p></a></h6>                    
                  </div>                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">                    
                    <a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->id )}}"><img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->imagen}}" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">                    
                    <time datetime="2016-08-23" class="posts__date">{{NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->fecha}}</time>
                    <h6 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->id )}}"><p>{{Str::limit(NoticiasPosicion::where('posicion_web','=',9)->first()->Noticias->titulo,$limit=50,$end='...')}}</p></a></h6>
                  </div>                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">                    
                    <a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->id )}}"><img src="uploads/contenidos/noticias/{{NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->imagen}}" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">                    
                    <time datetime="2016-08-23" class="posts__date">{{NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->fecha}}</time>
                    <h6 class="posts__title"><a href="{{route('detalle_noticias', NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->id )}}"><p>{{Str::limit(NoticiasPosicion::where('posicion_web','=',10)->first()->Noticias->titulo,$limit=50,$end='...')}}</p></a></h6>                    
                  </div>                  
                </div>
              </div>

            </div>
            <!-- Post Area 1 / End -->


            <!-- Last Game Results -->
              @if(isset($banner_inferior))
            <a href="{{$banner_inferior->url}}" target="_blank"><h4><img src="uploads/contenidos/banner/{{$banner_inferior->imagen}}"></h4></a>
              @endif
            <!-- Last Game Results / End -->

            <!-- Post Area 2 -->
            <div class="posts posts--cards post-grid row">

              <div class="clearfix hidden-md hidden-lg"></div>


              <div class="clearfix hidden-md hidden-lg"></div>

              <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="{{route('galeria')}}"><img src="assets/webnueva/images/samples/post-img8.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    
                    <h6 class="posts__title"><a href="{{route('galeria')}}"><p>Galeria de Fotos</p></a></h6>
                  </div>
                  
                </div>
              </div>

              <div class="post-grid__item col-sm-6" >
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    
                    <a href="{{route('social')}}"><img src="assets/webnueva/images/samples/post-img2.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <h6 class="posts__title"><a href="{{route('social')}}"><p>ACLAV Social</p></a></h6>
                  </div>
                  
                </div>
              </div>


            </div>
            <!-- Post Area 2 / End -->
            
            <!-- Videos Inicio -->
             <div class="rvs-container rvs-horizontal rvs-light rvs-blue-highlight">
              <div class="rvs-item-container">
                <div class="rvs-item-stage">
                  @foreach($videos as $video)
                  <div class="rvs-item" style="background-image: url(https://i.ytimg.com/vi/{{$video->object}}/hqdefault.jpg )">
                    <p class="rvs-item-text">{{$video->titulo}} <small>by Voley ACLAV</small></p>
                    <a href="https://www.youtube.com/watch?v={{$video->object}}" class="rvs-play-video"></a>
                  </div>
                  @endforeach
               
                </div>
              </div>
              <div class="rvs-nav-container">
                <a class="rvs-nav-prev"></a>
                <div class="rvs-nav-stage">
                  @foreach($videos as $video)
                    
                   <a class="rvs-nav-item">
                    <span class="rvs-nav-item-thumb" style="background-image: url(https://i.ytimg.com/vi/{{$video->object}}/default.jpg)"></span>
                    <h5 class="rvs-nav-item-title" style="text-transform: none"><p>{{$video->titulo}}</p></h5>        
                  </a>
                  @endforeach
                
                </div>
                <a class="rvs-nav-next"></a>
              </div>
            </div>
           
            <!-- Videos / End -->

            

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
        </div>

        <!-- Video Slideshow -->
        
            <!-- Carousel / End -->

          </div>
        </div>
        <!-- Video Slideshow / End -->


    <!-- Content / End -->

    <!-- Footer
    ================================================== -->

    
    <!-- Footer / End --> 
    @if(count($modal_pop) > 0)
    <!-- Login/Register Modal -->
    <div id="modal" class="modal fade " tabindex="-1" role="dialog" >
      <div class="ventana">
        <!-- Modal content-->
        
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
            <img src="uploads/contenidos/estadisticae/{{$modal_pop->imagen}}">
          </div>

        </div>
      </div>
    </div>
    <!-- Login/Register Modal / End -->
    @endif
    
</div>

@endsection

@section('javascript')
   @if(count($modal_pop) > 0)
    <script type="text/javascript">
      $(window).on('load',function(){
          $('#modal').modal('show');
      });
    </script>
  @endif
  @if($partidosDiarios->count() != 0)
  <script type="text/javascript">
    function pxp()
    {      
        $.get('web/pxp',function(data){
        for(var i=0; i < data.length; i++) {
            $('#divPXP').append(i);
             $('#partido_'+ data[i].partido +'_set_total_local').text(data[i].set_local);
             $('#partido_'+ data[i].partido +'_set_total_visita').text(data[i].set_visita);
    
             for(var key=0 ; key < data[i].punto_partido.length; key++)
             {  
              
              if(data[i].punto_partido[key].set_numero == 1)
                {
                  if(data[i].punto_partido[key].set_1_local > data[i].punto_partido[key].set_1_visita){
                    $('#partido_'+data[i].partido+'_set_1_Local').html('<b>'+data[i].punto_partido[key].set_1_local+'</b>');
                  }else{
                    $('#partido_'+data[i].partido+'_set_1_Local').html(data[i].punto_partido[key].set_1_local);
                  }
                  if(data[i].punto_partido[key].set_1_visita > data[i].punto_partido[key].set_1_local){
                    $('#partido_'+data[i].partido+'_set_1_Visita').html('<b>'+data[i].punto_partido[key].set_1_visita+'</b>');   
                  }else{
                    $('#partido_'+data[i].partido+'_set_1_Visita').html(data[i].punto_partido[key].set_1_visita);   
                  }
                }
              if(data[i].punto_partido[key].set_numero == 2)
                {
                  if(data[i].punto_partido[key].set_2_local > data[i].punto_partido[key].set_2_visita){
                    $('#partido_'+data[i].partido+'_set_2_Local').html('<b>'+data[i].punto_partido[key].set_2_local+'</b>');
                  }else{
                    $('#partido_'+data[i].partido+'_set_2_Local').html(data[i].punto_partido[key].set_2_local);
                  }
                  if(data[i].punto_partido[key].set_2_visita > data[i].punto_partido[key].set_2_local){
                    $('#partido_'+data[i].partido+'_set_2_Visita').html('<b>'+data[i].punto_partido[key].set_2_visita+'</b>');   
                  }else{
                    $('#partido_'+data[i].partido+'_set_2_Visita').html(data[i].punto_partido[key].set_2_visita);   
                  }
                }
              if(data[i].punto_partido[key].set_numero == 3)
                {
                  if(data[i].punto_partido[key].set_3_local > data[i].punto_partido[key].set_3_visita){
                    $('#partido_'+data[i].partido+'_set_3_Local').html('<b>'+data[i].punto_partido[key].set_3_local+'</b>');
                    }else{
                    $('#partido_'+data[i].partido+'_set_3_Local').html(data[i].punto_partido[key].set_3_local);
                    }
                  if(data[i].punto_partido[key].set_3_visita > data[i].punto_partido[key].set_3_local){
                    $('#partido_'+data[i].partido+'_set_3_Visita').html('<b>'+data[i].punto_partido[key].set_3_visita+'</b>');   
                  }else{
                    $('#partido_'+data[i].partido+'_set_3_Visita').html(data[i].punto_partido[key].set_3_visita);   
                  }  
                    
                
                }
              if(data[i].punto_partido[key].set_numero == 4)
                {
                  if(data[i].punto_partido[key].set_4_local > data[i].punto_partido[key].set_4_visita){
                    $('#partido_'+data[i].partido+'_set_4_Local').html('<b>'+data[i].punto_partido[key].set_4_local+'</b>');
                  }else{
                    $('#partido_'+data[i].partido+'_set_4_Local').html(data[i].punto_partido[key].set_4_local);                   
                  }
                  if(data[i].punto_partido[key].set_4_visita > data[i].punto_partido[key].set_4_local){
                    $('#partido_'+data[i].partido+'_set_4_Visita').html('<b>'+data[i].punto_partido[key].set_4_visita+'</b>');   
                  }else{
                    $('#partido_'+data[i].partido+'_set_4_Visita').html(data[i].punto_partido[key].set_4_visita);                     
                  }
                }
              if(data[i].punto_partido[key].set_numero == 5)
                {
                  if(data[i].punto_partido[key].set_5_local > data[i].punto_partido[key].set_5_visita){
                    $('#partido_'+data[i].partido+'_set_5_Local').html('<b>'+data[i].punto_partido[key].set_5_local+'</b>');
                  }else{
                    $('#partido_'+data[i].partido+'_set_5_Local').html(data[i].punto_partido[key].set_5_local);
                  }
                  if(data[i].punto_partido[key].set_5_visita > data[i].punto_partido[key].set_5_local){
                    $('#partido_'+data[i].partido+'_set_5_Visita').html('<b>'+data[i].punto_partido[key].set_5_visita+'</b>');   
                  }else{
                    $('#partido_'+data[i].partido+'_set_5_Visita').html(data[i].punto_partido[key].set_5_visita);   
                  }
                }
             }
        
             console.log('---');
        }          
     });
    }
    
    function interval()
    {
       if($('.actual').length != 0)
       {
            setInterval(function()
            {
             pxp();
            }, 
            20000);
       }
    }
       // very simple to use!
    $(document).ready(function() 
    {     
        interval();
    
    });
  </script>
  @endif
@endsection