@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Posts List -->
            <div class="posts posts--cards posts--cards-thumb-left post-list">
              @foreach($model as $estadio)
              <div class="alert alert-info">
                <a href="{{ route('detalle_estadio',$estadio->id) }}"><button type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Acceder</button></a>
                <strong>{{$estadio->nombre}}</strong> 
              </div>
              @endforeach
            </div>
    
          </div>
          
           @include('web_nueva.template.sidebar')

        </div>

     </div>
   </div>

@endsection        