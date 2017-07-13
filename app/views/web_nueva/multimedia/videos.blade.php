@extends('web_nueva.template')
@section('site-content')
<div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">
            
            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">

              @foreach($models as $model)
              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <a href="detalle_video.html"><img src="assets/webnueva/images/video001a.jpg" alt=""></a>
                    
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      
                      <h6 class="posts__title"><a href="detalle_video.html"><p>{{$model->titulo}}</p></a></h6>
                      
                      <div class="posts__excerpt">
                        <p><font size="3">Cinco competiciones oficiales, tres podios, 43 partidos disputados y 28 victorias. Un gran balance de UPCN San Juan Voley en la temporada 2016/17 que lo sigue manteniendo en lo alto del voley argentino.</font> </p>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              @endforeach

   

            </div>
            <!-- Posts List / End -->

            <!-- Post Pagination -->
            <nav class="post-pagination text-center">
              {{$models->links()}}
            </nav>
            <!-- Post Pagination / End -->
            

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

      </div>
    </div>
@endsection 