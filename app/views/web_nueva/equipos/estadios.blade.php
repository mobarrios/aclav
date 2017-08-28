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
                <strong> <a href="{{ route('detalle_estadio',$estadio->id) }}">{{$estadio->nombre}}</a></strong> 
              </div>

              @endforeach
            </div>
    
          </div>
          
           @include('web_nueva.template.sidebar')

        </div>

     </div>
   </div>

@endsection        