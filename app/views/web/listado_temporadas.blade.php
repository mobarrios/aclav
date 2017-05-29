@extends('web.base')
@section('contenido')<br>
<div class="sections3">
  <div class="col-lg-12 col-md-4 col-sm-4 col-xs-6"> 

    <div class="blogtext">
      <figure> 
        <div class="media">
          <h4 class="media-heading"><p><font size="5" color="#f2293a"></font></p></h4>
          <div class="media-body"><address>

            <center>
              <br><br>

              <table class="table table-hover table-striped" border="1" bordercolor="#dddddd">
                <tr>
                  <td colspan="9"><center><button type="button" class="btn btn-primary btn-xs backcolor">{{$tituloSeccion}}</button></center></td>
                </tr>
                <tr>
                  <td class="info"><center><p><font size="4" color="#000000">Temporada</font></p></center></td>
                  <td class="info"><center><p><font size="4" color="#000000">Fecha</font></p></center></td>
                  <td class="info"><center><p><font size="4" color="#000000">Calendario</font></p></center></td>
                  <td class="info"><center><p><font size="4" color="#000000">Posiciones</font></p></center></td>
                  <td class="info"><center><p><font size="4" color="#000000">Resultados</font></p></font></p></center></td>

                </tr>
                <tr>
                  <!-- falta validar si no tiene dato-->

                  @foreach($models as $model)
                  <td>
                    <p><font size="3"> 
                      <a href=""><center><button type="button" class="btn btn-primary btn-xs backcolor">{{$model->nombre_temporada}}</button></center></a> </font></p>

                    </td>
                    <td></td>
                    <td>
                      <center><p><font size="3"> 
                        <a href=""><center><button type="button" class="btn btn-primary btn-xs backcolor">Calendario</button></center></a> </font></p>

                      </center>
                    </td>
                    <td><center><p><font size="3"><center><button type="button" class="btn btn-primary btn-xs backcolor">Posiciones</button></center></font></p></center></td>
                    <td><center><p><font size="3"><center><button type="button" class="btn btn-primary btn-xs backcolor">Resultados</button></center></font></p></center></td>

                    @endforeach
                  </tr>
                  <tr>
                  </table>
                  <br>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </figure>
    @endsection        
                        

                   

                