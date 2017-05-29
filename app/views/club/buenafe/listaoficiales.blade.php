

    <div class="modal-content">   
    <div class="modal-header">
      Oficiales  Club
     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>

    <div class="modal-body">

    <section class="panel panel-info">

    <header class="panel-heading">Tabla</header>

        <div class="panel-body">
        
        <form action="buenafe/agregarstaff" method="post">
            <div class="table-responsive no-border">

                <select name="funcion" class="form-control">

                    @foreach($funciones as $funcion)
                        <option value="{{$funcion->id}}">{{$funcion->funcion}}</option>
                    @endforeach
                    
                </select>

                <table class="table datatable">
                    <thead>
                        <tr>
                            <th class="col-sm-1">DNI</th>
                            <th>Apellido Nombre </th>
                            <th>Función</th>
                            
                            <th class="col-sm-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($oficial as $oficiales)
                            <tr>
                                <td>{{ $oficiales->dni}} </td>
                                <td>{{ $oficiales->apellido }} {{ $oficiales->nombre }}</td>
                                <td>{{ $oficiales->funcion->funcion }}</td>

                                <td>
                                   <input type="checkbox" name="oficial" value="{{$oficiales->id}}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                         <button class="form-control btn-success">Agregar</button>  
                </table>

            </div>

        </div>

    </section>
    </form>
    </div>
    </div>
