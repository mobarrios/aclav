@extends('web_nueva.template')
@section('site-content')

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            
              <article class="card card--lg post post--single">
              <br>
              <div class="video-container">
                <iframe id="player" type="text/html" width="640" height="360"
  src="http://www.youtube.com/embed/{{$model->object}}?enablejsapi=1"
  frameborder="0"></iframe>
              </div>


              <div class="card__content">
                
                <header class="post__header">
                  <h2 class="post__title"><p>{{$model->titulo}}</p></h2>
                    <div class="post-author__info">
                          <h6>@foreach($model->club as $club)
                          <img src="uploads/escudos/{{$club->escudo}}" width="40">
                          @endforeach</h6>
                  </div>
                  <font color="#000000"></font><font color="#000000"> <p> {{$model->created_at}}</p></font>

                </header>
               
                <div class="post__content">
                  <p><font size="3">{{$model->copete}}</font> 
                  </p>
  
              </div>
               <h5 class="post-author__name"><p>{{$model->fuente}}</p></h5>
            </article>
            <!-- Article / End -->

            

            

          </div>
         <!-- Content / End -->

          <!-- Sidebar -->
          @include('web_nueva.template.sidebar')
          <!-- Sidebar / End -->
       
        </div>
        <!-- Video Slideshow / End -->

      </div>
    </div>

@endsection    