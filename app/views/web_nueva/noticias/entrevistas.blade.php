@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">

              @foreach($model as $entrevista)
              <div class="post-list__item">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <a href="{{route('detalle_noticias',$entrevista->id)}}"><img src="uploads/contenidos/noticias/{{$entrevista->imagen}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content">
                      <h6 class="posts__title"><a href="{{route('detalle_noticias',$entrevista->id)}}"><p>{{$entrevista->titulo}}</p></a></h6>
                      <time datetime="2016-08-18" class="posts__date"><p>{{$entrevista->fecha}}</p></time>
                      <div class="posts__excerpt"><p>
                        {{$entrevista->copete}}
                        </p>
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
               {{$model->links()}}
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