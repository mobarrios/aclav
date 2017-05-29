@extends('template-2.template')


@section('content')


<div class="col-md-3">
	<div class="pd-md text-center ">
	    <img src="uploads/escudos/{{$model->escudo}}" class="avatar avatar-lg img-rounded">
	</div>
	<p class="text-center">{{$model->nombre}}
	    <br>
	    <!--<small>
	        <i>{{$model->denominacion}}</i>
	    </small>-->
	</p>
	<hr>
	<p class="text-center">
	    <small></small>
	    <br>
	    <small class="characters"></small>
	    <br>
	    <small class="words"></small>
	    <br>
	    <small class="paragraphs"></small>
	</p>
</div>
<div class="col-md-9  bg-white">
	<br>

<section>
                                <ul id="myTab2" class="nav nav-tabs">
                                    <li >
                                        <a href="#equipos" data-toggle="tab">Equipos</a>
                                    </li>
                                </ul>
                                <section class="panel">
                                    <div class="panel-body">
                                        <div id="myTabContent2" class="tab-content">
                                            <div class="tab-pane active" id="equipos">
                                                    @include('club.equipo.list')
                                            </div>
                                         </div>
                                    </div>
                                </section>
                            </section>

</div>


@stop