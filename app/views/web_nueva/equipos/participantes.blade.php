@extends('web_nueva.template')
@section('site-content')
 <div class="site-content">
      <div class="container">

        <!-- Equipos Inicio -->
        <div class="gallery row">
          
        @foreach($model_id as $id)
        <?php $models = Equipo::find($id); ?>
        @if($models->id != 15)
          <div class="gallery__item col-xs-6 col-sm-4">
            <a href="{{route('detalle_equipo',$models->id)}}" class="gallery__item-inner card">
              <header class="gallery__header card__header">
                <div class="gallery__details">
                  <h4 class="gallery__name"><p>{{$models->nombre}}</p></h4>
                </div>
              </header>
              <figure class="gallery__thumb text-center">
                <!--
                assets/images/e008.jpg
                -->
                <img src="uploads/escudos/{{$models->escudo}}" alt="" >
                <span class="btn-fab btn-fab--clean gallery__btn-fab"></span>
              </figure>
            </a>
          </div>
           @endif
        @endforeach
         
        </div>
        <!-- Equipos End -->

      </div>
    </div>

@endsection        