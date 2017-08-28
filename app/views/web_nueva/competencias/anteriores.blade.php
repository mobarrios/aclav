@extends('web_nueva.template')
@section('site-content')


 <div class="container">

        <div class="row">


          <!-- Content -->
          <div class="content col-md-8">

<div class="card card--has-table">
          <div class="card__header card__header--has-btn">
            <h4>Seleccione Temporada</h4>
            <!-- Result Filter -->
            <ul class="team-result-filter">
              <li class="team-result-filter__item">
                <select class="form-control input-xs">
                  <option>Temp. 2016 - 2017</option>
                  <option>Temp. 2014 - 2015</option>
                  <option>Temp. 2012 - 2013</option>
                </select>
              </li>

              <li class="team-result-filter__item">
                <select class="form-control input-xs">
                  <option>A1 Masculina</option>
                  <option>A2 Masculina</option>
                  <option>A1 Femenina</option>
                </select>
              </li>


              <li class="team-result-filter__item">
                <select class="form-control input-xs">
                  <option>Copa Master</option>
                  <option>Copa Desafio</option>
                  <option>Presudamericano</option>
                  <option>Copa ACLAV</option>
                  <option>Copa Argentina</option>
                  <option>Liga Argentina de Voley</option>
                </select>
              </li>
              
              <li class="team-result-filter__item">
             <a href="#" class="btn btn-default btn-xs">Acceder</a>
            </li>
            </ul>
            <!-- Result Filter / End -->
            
          </div>
          
        </div>
        <br><br>
            <!-- Posts List -->
           
            <!-- Posts List / End -->

            <!-- Post Pagination -->
            
            <!-- Post Pagination / End -->
            

          </div>


@endsection