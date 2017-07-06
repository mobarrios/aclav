@extends('web_nueva.template')
@section('site-content')
  <div class="site-content">
      <div class="container">

        <!-- Gallery -->
            <div class="gallery row">
              
              @foreach($models as $galerias)
            
                 <div class="gallery__item col-xs-6 col-sm-3">
                    <a href="{{route('album',$galerias->id)}}">
                      <figure>
                        <img src="assets/webnueva/images/samples/post-img4x.jpg">
                      </figure>
                      <div class="gallery__content card__content">
                        <span class="gallery__icon">
                          <span class="icon-picture"></span>
                        </span>
                        <div class="gallery__details">
                          <h4 class="gallery__name"><p>{{$galerias->titulo}}</p></h4>
                        </div>
                      </div>          
                    </a>
                  </div>

              @endforeach
              </div>
            <!-- Gallery / End -->


            <div class="text-center">
              <!-- Team Pagination -->
              <nav class="team-pagination">
                  {{$models->links()}}
              </nav>
              <!-- Team Pagination / End -->
              
            </div>

          </div>
        </div>
 </div>   
@endsection