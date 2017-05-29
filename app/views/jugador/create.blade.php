

                @if ($action =="create")

                     {{ Form::open(array('class' => 'form-horizontal bordered-group', 'enctype' => 'multipart/form-data')) }}

                @else

                     {{ Form::model($jugador, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}

                @endif

                @include('jugador.form.graldata')

                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>

                        <div class="col-sm-4">
                            {{ Form::submit('Guardar', array('class' => 'btn')) }}
                        </div>
                    </div>

                {{ Form::close() }}

           