
            
                    @if ($action == "create")

                        {{ Form::open(array('url' => $modulo.'/new', 'class'=>'from-horizontal','enctype'=>'multipart/form-data')) }}
                 
                    @else

                         {{ Form::model($modelo , array('class' => 'form-horizontal','enctype'=>'multipart/form-data')) }}

                            <a href="uploads/escudos/{{$modelo->escudo}}" class="thumbnail">
                            <img src="uploads/escudos/{{$modelo->escudo}}" a>
                            </a>
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

                    {{ Form::label('label', 'Nombre', array('class' => 'control-label')) }}  
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }} 

                    <!--
                    {{ Form::label('label', 'Denominación', array('class' => 'control-label')) }}  
                    {{ Form::text('denominacion', Input::old('denominacion'), array('class'=>'form-control' )) }} 
                    -->

                    {{ Form::label('label', 'Federación', array('class' => 'control-label')) }}  
                    {{ Form::text('federacion', Input::old('federacion'), array('class'=>'form-control' )) }} 

                    {{ Form::label('label', 'Nacionalidad', array('class' => 'control-label')) }}  
                    {{ Form::text('nacionalidad', Input::old('nacionalidad'), array('class'=>'form-control' )) }} 
      

                    {{ Form::label('label', 'Escudo', array('class' => 'control-label')) }}  
                    {{ Form::file ('escudo') }} 

                

                    <br>
                     {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}
                    
                    {{ Form::close() }}


