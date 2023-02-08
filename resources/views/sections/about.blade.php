<section id="about">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2>Acerca de la conferencia</h2>
              <p>{{ $settings['about_description'] ?? '' }}</p>
            </div>
            <div class="col-lg-3">
              <h3>Dónde</h3>
              <p>{!! $settings['about_where'] ?? '' !!}</p>
            </div>
            <div class="col-lg-3">
              <h3>Cuándo</h3>
              <p>{!! $settings['about_when'] ?? '' !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2>Acerca de la conferencia</h2>
              <p>{{ $settings['about_description_2'] ?? '' }}</p>
            </div>
            <div class="col-lg-3">
              <h3>Dónde</h3>
              <p>{!! $settings['about_where_2'] ?? '' !!}</p>
            </div>
            <div class="col-lg-3">
              <h3>Cuándo</h3>
              <p>{!! $settings['about_when_2'] ?? '' !!}</p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2>Acerca de la conferencia</h2>
              <p>{{ $settings['about_description_3'] ?? '' }}</p>
            </div>
            <div class="col-lg-3">
              <h3>Dónde</h3>
              <p>{!! $settings['about_where_3'] ?? '' !!}</p>
            </div>
            <div class="col-lg-3">
              <h3>Cuándo</h3>
              <p>{!! $settings['about_when_3'] ?? '' !!}</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>


<!-- <section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Acerca de la conferencia</h2>
        <p>{{ $settings['about_description'] ?? '' }}</p>
      </div>
      <div class="col-lg-3">
        <h3>Dónde</h3>
        <p>{!! $settings['about_where'] ?? '' !!}</p>
      </div>
      <div class="col-lg-3">
        <h3>Cuándo</h3>
        <p>{!! $settings['about_when'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section> -->
