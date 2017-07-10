@extends('web_nueva.template')
@section('site-content')
   <div class="site-content">
      <div class="container">

        <!-- Team Pages Filter -->
          @include('web_nueva.competencias.nav')
        <!-- Team Pages Filter / End -->

        <!-- Team Standings -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4>Liga Argentina de Voleibol</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover table-standings table-standings--full">
                <thead>
                  <tr bgcolor="#ccc">
                    <th rowspan="2" class="team-standings__pos"></th>
                    <th rowspan="2" class="team-standings__win"></th>
                    <th rowspan="2" class="team-standings__team"></th>
                    <th rowspan="2" class="team-standings__win"></th>
                    <th rowspan="3" class="team-standings__lose"></th>
                    <th rowspan="3" class="team-standings__pct">Partidos</th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="2" class="team-standings__home">Sets</th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="3" class="team-standings__gb"></th>
                    <th rowspan="2" class="team-standings__home">Tantos</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th class="team-standings__road"></th>
                    <th class="team-standings__div"">Racha</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th rowspan="2" class="team-standings__pos">Rank</th>
                    <th rowspan="2" class="team-standings__win">Cod</th>
                    <th rowspan="2" class="team-standings__team">Equipo</th>
                    <th rowspan="2" class="team-standings__win">Pts</th>
                  </tr>
                  <tr bgcolor="#ccc">
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Tot</th>
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Coef</th>
                    <th class="team-standings__op-ppg">Gan</th>
                    <th class="team-standings__diff">Per</th>
                    <th class="team-standings__strk">Coef</th>
                    <th class="team-standings__strk"></th>
                  </tr>

                  
                </thead>
                <tbody>
                  <tr>
                    <td class="team-standings__pos">1</td>
                    <td class="team-standings__win">BOL</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/001.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Personal Bolivar</h6>
                          
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">2</td>
                    <td class="team-standings__win">CIU</span></td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/002.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Ciudad Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">3</td>
                    <td class="team-standings__win">UPC</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/003.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">UPCN San Juan Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">4</td>
                    <td class="team-standings__win">LOM</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/004.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Lomas Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">5</td>
                    <td class="team-standings__win">NQN</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/005.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Gigantes del Sur</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">6</td>
                    <td class="team-standings__win">OSJ</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/006.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Obras UDAP Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">7</td>
                    <td class="team-standings__win">AJM</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/007.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Alianza Jesus Maria</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">8</td>
                    <td class="team-standings__win">RIV</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/008.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">River Plate</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">9</td>
                    <td class="team-standings__win">MOR</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/009.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Deportivo Moron</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">10</td>
                    <td class="team-standings__win">UNT</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/010.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Untref Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                  <tr>
                    <td class="team-standings__pos">11</td>
                    <td class="team-standings__win ">PSM</td>
                    <td class="team-standings__team">
                      <div class="team-meta">
                        <figure class="team-meta__logo">
                          <img src="assets/webnueva/images/samples/logos/011.png" alt="">
                        </figure>
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">PSM Voley</h6>
                        </div>
                      </div>
                    </td>
                    <td class="team-standings__win"><span class="glossary__abbr">48</span></td>
                    <td class="team-standings__lose">16</td>
                    <td class="team-standings__pct">4</td>
                    <td class="team-standings__gb">20</td>
                    <td class="team-standings__home">52</td>
                    <td class="team-standings__road">16</td>
                    <td class="team-standings__div"> 3.250</td>
                    <td class="team-standings__ppg">1636</td>
                    <td class="team-standings__op-ppg">1421</td>
                    <td class="team-standings__diff">1.151</td>
                    <td class="team-standings__strk">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Team Standings / End -->

        

      </div>
    </div>
@endsection