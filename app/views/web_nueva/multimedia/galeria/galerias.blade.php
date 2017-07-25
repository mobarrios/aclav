@extends('web_nueva.template')
@section('site-content')
  <div class="site-content">
      <div class="container">

        <!-- Gallery -->
        <div class="gallery row">
          @foreach($model as $galeria)

          <div class="gallery__item col-xs-6 col-sm-3">
            <a href="{{route('detalle_galeria', $galeria->id)}}">
              <figure class="gallery__thumb">
                <img src="uploads/contenidos/galeria/{{$galeria->imagen}}" alt="">
                <span class="btn-fab gallery__btn-fab"></span>
              </figure>
              <div class="gallery__content card__content">
                <span class="gallery__icon">
                  <span class="icon-camera"></span>
                </span>
                <div class="gallery__details">
                  <h4 class="gallery__name"><p>{{$galeria->titulo}}</p></h4>
                </div>
              </div>
            </a>
          </div>
          @endforeach
       
        </div>

         <div class="text-center">
              <!-- Team Pagination -->
              <nav class="team-pagination">
                  {{$model->links()}}
              </nav>
              <!-- Team Pagination / End -->
              
            </div>

    </div>
</div>

@endsection