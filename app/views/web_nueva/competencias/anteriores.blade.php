@extends('web_nueva.template')
@section('site-content')

 <div class="site-content1">
 <div class="container">

        <div class="row">
          <div class="content col-md-8">

            <div class="card">
              <div class="card__header">
                <h4>Seleccione Temporada</h4>
              </div>
              <div class="card__content">
                 {{ Form::open(array('route' => 'calendario', 'method' => 'GET'))}}    
                  <div class="form-group form-group--sm">
                    <select class="form-control temporada_id">
                        <option >TEMPORADA</option>
                        @foreach($temporadas as $temporada)
                        <option value="{{$temporada->id}}">{{$temporada->nombre_temporada}}</option>
                        @endforeach 
                    </select>
                  </div>
                  <div class="form-group form-group--sm">
                    <select class="form-control serie_id">
                      <option >SERIE</option>
                      @foreach($series as $serie)
                      <option value="{{$serie->id}}"> {{$serie->nombre_serie}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group form-group--sm">
                    <select name="torneo_id" class="form-control torneo_id">
                       <option >TORNEO</option>
                    </select>
                  </div>
                  
                  <div class="">
                    <button type="submit" class="btn btn-default btn-lg btn-block">Buscar</button>
                  </div>
                {{ Form::close() }}

              </div>
            </div>
          </div>
      
          @include('web_nueva.template.sidebar')

        </div>


</div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
  $(".serie_id").change(function() 
  {
      var temporada_id = ($(".temporada_id option:selected" ).val());
      var serie_id = ($(".serie_id option:selected" ).val());
      $('.torneo_id').empty();
      $.ajax({
                type: "POST",
                url : "{{route('getTorneos')}}",
                data :  {temporada_id: temporada_id, serie_id: serie_id},
                success : function(data){
                    $.each(data, function(index, sub){
                      console.log(data);
                        $('.torneo_id').append('<option value="'+sub.id+'"> '+ sub.nombre_torneo+' </option>')
                    });
                }
    });
  });

  $(".temporada_id").change(function() 
  {
      var temporada_id = ($(".temporada_id option:selected" ).val());
      var serie_id = ($(".serie_id option:selected" ).val());
      $('.torneo_id').empty();
      $.ajax({
                type: "POST",
                url : "{{route('getTorneos')}}",
                data :  {temporada_id: temporada_id, serie_id: serie_id},
                success : function(data){
                    $.each(data, function(index, sub){
                      console.log(data);
                        $('.torneo_id').append('<option value="'+sub.id+'"> '+ sub.nombre_torneo+' </option>')
                    });
                }
    });
  });
</script>
@endsection