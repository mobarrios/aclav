@extends('template-2.template')


@section('content')

<section  class="panel ">
            
    <div class="panel-body">
                    @if ($action == "create")

                        {{ Form::open(array('url' => 'equipo/new', 'class'=>'from-horizontal','enctype'=>'multipart/form-data')) }}
                 
                    @else

                        {{ Form::model($model , array('class' => 'form-horizontal','enctype'=>'multipart/form-data')) }}
                                               

                    @endif



                    <!--  
                    {{ Form::label('label', 'nombre', array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::text ('nombre', Input::old('nombre'), array('class' => 'col-sm-2 control-label')) }}
                    {{ Form::file ('file', $attributes = array()) }} 
                    {{ Form::checkbox('name', 'value', true) }}
                    {{ Form::radio('name', 'value', true) }}
                    {{ Form::select('animal', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel'), ))}}

                    {{ Form::label('subMenu', 'Sub-Menu', array('class' => 'control-label')) }}  
                    {{ Form::checkbox('sub', Input::old('sub')) }}
                     -->

                    {{ Form::label('label', 'Nombre Equipo', array('class' => 'control-label')) }}  
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }} 

                    {{ Form::label('label', 'Genero', array('class' => 'control-label')) }}                    
                    {{ Form::select('sexo', array('Masculino'=>'Masculino' ,'Femenino'=>'Femenino') , Input::old('serie_id') , array('class'=>'form-control'))}}
                    

                    {{ Form::label('label', 'Sigla', array('class' => 'control-label')) }}  
                    {{ Form::text('sigla', Input::old('sigla'), array('class'=>'form-control' )) }} 


                    {{ Form::label('label', 'Escudo', array('class' => 'control-label')) }}  
                    {{ Form::file ('escudo') }} 

                    {{ Form::label('label', 'Historia de la Institución', array('class' => 'control-label')) }}  
                    {{ Form::textarea('historia', Input::old('historia'), array('class'=>'form-control' )) }}  

                    <br>
                     {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}
                    
                    {{ Form::close() }}
    </div>
</section>

@stop