<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Comprar Tickets</h2>
      <p>Escoge el que más te sea conveniente</p>
    </div>
    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
        </button>
        <h4>{{ Session::get('success') }}</h4>
      </div>
    @endif
    @if (Session::has('fail'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
        </button>
        <h4>{{ Session::get('fail') }}</h4>
      </div>
    @endif
    <div class="row">
      @foreach($prices as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($amenities as $amenity)
                  <li @if(!$price->amenities->contains($amenity->id))class="text-muted"@endif>
                    <span class="fa-li"><i class="fa fa-{{ $price->amenities->contains($amenity->id) ? 'check' : 'times' }}"></i></span>{{ $amenity->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div id="buy-tickets-btn"  class="text-center">
                <form action="{{ url('charge') }}" method="post">
                  <input type="hidden" name="amount" value="{{ $price->price }}"/>
                   {{ csrf_field() }}
                  <input type="submit" name="submit" value="Comprar ahora">
                </form>
              </div>
            </div>
          </div>
       </div>
      @endforeach
    </div>
  </div>


</section>
