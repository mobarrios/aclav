
        <div class="modal-content">   
            <div class="modal-header">
                {{$modulo}}
             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            
            <div class="modal-body">
            
                    @if ($action == "create")

                        {{ Form::open(array('url' => 'submenu/new', 'class'=>'from-horizontal')) }}
                        {{ Form::hidden('menu_id', $menu_id)}}

                    @else

                         {{ Form::model($modelo , array('class' => 'form-horizontal')) }}

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
                   

                    {{ Form::label('label', 'Sub-Menu', array('class' => 'control-label')) }}  
                    {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' )) }} 

                
                    {{ Form::label('Modulo', 'Modulo', array('class' => 'control-label')) }}  
                    {{ Form::select('modulos_id', $modulos ,Input::old('modulos_id'), array('class'=>'form-control')) }} 

                    <br>
                     {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}
                    
                    {{ Form::close() }}

            </div>


    </div>