<section id="speakers" class="section-with-bg">
  <div class="container">
    <div class="section-header">
      <h2>Conferencistas</h2>
      <p>Conoce a nuestros conferencistas</p>
  
    </div>

    <div class="row">
      @foreach($speakers as $speaker)
        <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h3 class="text-muted text-center"><a>{{ $speaker->name }}</a></h3>
                <hr>
                <p>{{ $speaker->description }}</p>
                <hr>
                <div id="speaker-btn" class = "text-center">
                  <a href="{{ route('speaker', $speaker->id) }}">Descripción completa</a>
           

                
                    <!-- <div class="social">
                    @if($speaker->twitter)
                      <a href="{{ $speaker->twitter }}"><i class="fa fa-twitter"></i></a>
                    @endif
                    @if($speaker->facebook)
                      <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if($speaker->linkedin)
                      <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
                    @endif
                  </div> -->

                </div>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
