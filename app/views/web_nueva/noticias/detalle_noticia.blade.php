@extends('web_nueva.template')
@section('css')
  <!-- comienzo Slider chaco -->
  <link rel="stylesheet" type="text/css" href="assets/webnueva/css/slider_style.css" />
  <script type="text/javascript" src="assets/webnueva/js/slider_jquery.js"></script>
  <!-- fin Slider chaco -->
@endsection
@section('site-content')
  <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

 <!-- inicio slider chaco -->
              <article class="card card--lg post post--single">

              <figure class="post__thumbnail">
                <div id="chacslider-container1">
                	<div class="ws_images">
                    <ul>

                		  @if(!empty($model->imagen))
                      <li><img src="uploads/contenidos/noticias/{{$model->imagen}}" alt="noti001" title="noti001" id="wows1_0"/></li>
                		  @endif
                      @if(!empty($model->imagen_1))
                      <li><img src="uploads/contenidos/noticias/{{$model->imagen_1}}" alt="noti002" title="noti002" id="wows1_1"/></li>
                		  @endif
                      @if(!empty($model->imagen_2))
                      <li><img src="uploads/contenidos/noticias/{{$model->imagen_2}}" alt="noti003" title="noti003" id="wows1_2"/></li>
                		  @endif
                       @if(!empty($model->imagen_3))
                      <li><img src="uploads/contenidos/noticias/{{$model->imagen_3}}" alt="noti004" title="noti004" id="wows1_3"/></li>
                		   @endif
                       @if(!empty($model->imagen_4))
                      <li><img src="uploads/contenidos/noticias/{{$model->imagen_4}}" alt="noti005" title="noti005" id="wows1_4"/></li>		
                	     @endif
                    </ul>
                  </div>

                	<div class="ws_thumbs">
                    <div>

                       @if(!empty ($model->imagen))
                       <a href="#" title="noti001"><img src="uploads/contenidos/noticias/{{$model->imagen}}" alt="" /></a>
                       @endif
                       @if(!empty($model->imagen_1))
                      <a href="#" title="noti002"><img src="uploads/contenidos/noticias/{{$model->imagen_1}}" alt="" /></a>
                		  @endif
                       @if(!empty($model->imagen_2))
                      <a href="#" title="noti003"><img src="uploads/contenidos/noticias/{{$model->imagen_2}}" alt="" /></a>
                		  @endif
                       @if(!empty($model->imagen_3))
                      <a href="#" title="noti004"><img src="uploads/contenidos/noticias/{{$model->imagen_3}}" alt="" /></a>
                		  @endif

                       @if(!empty($model->imagen_4))
                      <a href="#" title="noti005"><img src="uploads/contenidos/noticias/{{$model->imagen_4}}" alt="" /></a>		
                	   @endif
                    </div>
                  </div>

	                <div class="ws_shadow"></div>
	              </div>
              </figure>
 <!-- fin slider chaco -->

              <div class="card__content">
                
                <header class="post__header">
                  <h3 class="post-author__name"><p>{{$model->titulo}}</p></h3>
                  
                	<div class="post-author__info">
                          <h6>@foreach($model->club as $club)
                          <img src="uploads/escudos/{{$club->escudo}}" width="40">
                          @endforeach</h6>
                  </div>
                  <font color="#000000"></font><font color="#000000"> <i class="fa fa-align-justify"></i><p> {{$model->fecha}}</p></font>
                                    
				        </header>
<br>
                <div class="post__content">
                  {{$model->cuerpo}}
                </div><br>
                <h5 class="post-author__name"><p>{{$model->fuente}}</p></h5>
                
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