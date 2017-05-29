@extends('template-2/template')

@section('content')
	



<section>
    <ul id="myTab" class="nav nav-tabs">
        <li class="active pull-right">
        <a href="#auth" data-toggle="tab">Datos de Autenticación</a>
        </li>  
    </ul>
    <section class="panel">
        <div class="panel-body">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="auth">
                    
                        @if( Auth::user()->arbitro_id != 0 )
                                <a href="arbitro/editperfil/{{Crypt::encrypt(Auth::user()->arbitro_id)}}" class="btn btn-success btn-xs pull-right">Editar Datos de Sistema</a>
                        @elseif( Auth::user()->supervisor_id != 0)
                                <a href="supervisor/editperfil/{{Crypt::encrypt(Auth::user()->supervisor_id)}}" class="btn btn-success  btn-xs pull-right">Editar Datos de Sistema</a>
                        @endif 

                   <h1>
                    {{Auth::user()->usuario}}</h1>
					{{Form::model(User::find(Auth::user()->id), array('url'=>'usuarios/editperfil','role'=>'form'))}}
					{{Form::label('label','Nombre de Usuario',array('class'=>'label-control'))}}
					{{Form::text('usuario',Input::old('usuario'),array('class'=>'form-control'))}}

					{{Form::label('label','Contraseña',array('class'=>'label-control'))}}
					{{Form::text('password',Input::old('password'),array('class'=>'form-control'))}}

					<br><br>
					{{Form::submit('Actualizar',array('class'=>'btn btn-default'))}}
					
					{{Form::close()}}

                </div>

            </div>
        </div>
    </section>
</section>




@endsection
@stop

