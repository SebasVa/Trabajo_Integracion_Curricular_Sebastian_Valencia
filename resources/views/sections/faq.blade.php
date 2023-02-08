<section id="faq" class="wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Preguntas Frecuentes </h2>
      <p>Aquí encontraras las respuestas a las preguntas más comunes que se hacen nuestros usuarios</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
          <ul id="faq-list">
            @foreach($faqs as $faq)
              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq{{ $faq->id }}">{{ $faq->question }} <i class="fa fa-minus-circle"></i></a>
                <div id="faq{{ $faq->id }}" class="collapse" data-parent="#faq-list">
                  <p>
                    {{ $faq->answer }}
                  </p>
                </div>
              </li>
            @endforeach
  
          </ul>
      </div>
    </div>

  </div>

</section>
