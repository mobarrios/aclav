@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <div class="row">
          <div class="content col-md-8">
            @foreach($model as $estadio)
            <div class="card card--clean">
              <header class="card__header card__header--has-btn">
                <h4><a href="{{ route('detalle_estadio',$estadio->id) }}">{{$estadio->nombre}}</a></h4>
              </header>
            </div>
            @endforeach
          </div>
          @include('web_nueva.template.sidebar')
        </div>

     </div>
   </div>

@endsection        