<section id="venue" class="section-with-bg">
  <div  class="container">
    <div class="container">
        <div class="section-header">
          <h2>Ubicaciones</h2>
          <p>Consulta las ubicaciones para no perderte</p>
        </div>
    </div>
    <div class="row">
        @foreach($venues as $venue)
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">{{ $venue->name }}</h5>
                <hr>
                <p>{{ $venue->description }}</p>
                <hr>
                <div class="text-center">
                  <!-- Button trigger modal -->
                  <div id="venue-btn" class="text-center">
                    <input type="submit" value = "Ver en el mapa" data-toggle="modal" data-target="#exampleModalCenter"></input>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><p>Drección: {{ $venue->address }}</p></h5>
                        </div>
                        <div class="modal-body">
                          <div class="venue-map">
                            <iframe src="https://maps.google.com/maps?q={{ $venue->latitude }},{{ $venue->longitude }}&hl=en&z=14&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <div id="venue-btn" class="text-center">
                            <input type="submit" data-dismiss="modal" value="Cerrar"></input>

                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</section>