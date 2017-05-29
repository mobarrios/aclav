

     

    @if ($action == "create")

        {{ Form::open(array('url' => 'foo/bar')) }}
 
    @else
    
         {{ Form::model($modelo , array('class' => 'form-horizontal')) }}

    @endif


    {{ Form::label('label', 'nombre', array('class' => 'col-sm-2 control-label')) }}
    {{ Form::text ('nombre', Input::old('nombre'), array('class' => 'col-sm-2 control-label')) }}

    {{ Form::file ('file', $attributes = array()) }} 
    {{ Form::checkbox('name', 'value', true) }}
    {{ Form::radio('name', 'value', true) }}
    {{ Form::select('animal', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel'), ))}}

    {{ Form::submit('aceptar')}}

    {{ Form::close() }}