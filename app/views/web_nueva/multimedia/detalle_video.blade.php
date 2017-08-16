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
                  
                </header>
                <div class="post-author__info">
                          <h4 class="post-author__name"><p>Prensa ACLAV</p></h4>
                        </div>


                <div class="post__content">
                  <p><font size="3">{{$model->copete}}</font> 
                  </p>
  
              </div>
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