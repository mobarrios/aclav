@extends('web_nueva.template')
@section('site-content')

 <div class="site-content1">
 <div class="container">

        <div class="row">


          <!-- Content -->
          <div class="content col-md-8">
      {{ Form::open(array('route' => 'calendario', 'method' => 'GET'))}}      
      <div class="card card--has-table">
          <div class="card__header card__header--has-btn">
            <h4>Seleccione Temporada</h4>
            <!-- Result Filter -->
            <ul class="team-result-filter">
              <li class="team-result-filter__item">
                <select class="form-control input-xs temporada_id">
                  <option >TEMPORADA</option>
                  @foreach($temporadas as $temporada)
                  <option value="{{$temporada->id}}">{{$temporada->nombre_temporada}}</option>
                  @endforeach 
                </select>
              </li>

              <li class="team-result-filter__item">
                <select class="form-control input-xs serie_id">
                   <option >SERIE</option>
                  @foreach($series as $serie)
                  <option value="{{$serie->id}}"> {{$serie->nombre_serie}}</option>
                  @endforeach
                
                </select>
              </li>


              <li class="team-result-filter__item">
                <select class="form-control input-xs torneo_id" name="torneo_id">
                 
                </select>
              </li>
              
              <li class="team-result-filter__item">
               {{ Form::submit('Acceder', array('class' => 'btn btn-default btn-xs'))}}

            </li>
            </ul>
            <!-- Result Filter / End -->
            
          </div>
          
        </div>
        {{ Form::close() }}
        <br><br>
            <!-- Posts List -->
           
            <!-- Posts List / End -->

            <!-- Post Pagination -->
            
            <!-- Post Pagination / End -->
            

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