

    <div class="modal-content">   
    <div class="modal-header">
      Jugadores
     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>

    <div class="modal-body">

          <section class="panel panel-info">
    <header class="panel-heading">Tabla</header>
    <div class="panel-body">
    <div class="table-responsive no-border">
    <table class="table datatable">
        <thead>
            <tr>
                <th class="col-sm-1">DNI</th>
                <th>Jugador </th>
                <th class="col-sm-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugador as $jugadores)
                <tr>
                    <td>{{ $jugadores->dni}} </td>
                    <td>{{ $jugadores->apellido}} {{$jugadores->nombre}}</td>

                    <td>
                        <a href="buenafe/agregar/{{ Crypt::encrypt($jugadores->id) }}" ><i class="fa fa-plus"></i></a>
                        <a href="jugador/detalle/{{ Crypt::encrypt($jugadores->id) }}" ><i class="fa fa-search"></i></a>
                        <a href="jugador/edit/{{ Crypt::encrypt($jugadores->id) }}" ><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>   

       </table>
       
    </div>
    </div>
    </section>
    </div>
    </div>
