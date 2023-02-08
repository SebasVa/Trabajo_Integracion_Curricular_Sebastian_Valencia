<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Contáctanos</h2>
      <p>Si tienes dudas o problemas comunicate con nuestro soporte</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Dirección</h3>
          <a>	N18-237, 15 de Julio, Quito 170204</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Número de teléfono</h3>
          <p><a>0997562240</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Correo</h3>
          <p><a>svalencia310@gmail.com</a></p>
        </div>
      </div>

    </div>

    @if (Session::has('sent'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
        </button>
        <h4>{{ Session::get('sent') }}</h4>
      </div>
    @endif

    <div class="container">
        <form action="{{route('enviarcorreo')}}" method="POST">
            @csrf
            <div class="form-group">
                <input 
                  type="text" 
                  name="nombre" 
                  class="form-control" 
                  id="nombre" 
                  placeholder="Tu nombre"
                  required
                    pattern="[ A-Za-záéíóú]+"
                    oninvalid="
                    if (this.value ===''){
                        this.setCustomValidity('Ingresa el nombre!')
                    } else if (this.value !='') {
                        this.setCustomValidity('El nombre debe contener solo letras!')
                    }"
                    oninput="this.setCustomValidity('')"
                >
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <input 
                  type="text" 
                  name="asunto" 
                  class="form-control" 
                  id="asunto" 
                  placeholder="Asunto"
                  required
                  oninvalid="
                  if (this.value ===''){
                      this.setCustomValidity('Ingresa el asunto!')
                  }"
                  oninput="this.setCustomValidity('')"
                >
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <input 
                  type="email" 
                  name="email" 
                  class="form-control" 
                  id="email" 
                  placeholder="Tu correo electrónico"
                  required
                  pattern="[a-zA-Z0-9-_.]+@[a-zA-Z0-9-_]+(\.[a-zA-Z]{2,4}){1,2}"
                  oninvalid="
                  if (this.value ===''){
                      this.setCustomValidity('Ingresa el correo!')
                  } else if (this.value !='') {
                      this.setCustomValidity('No es un correo!')
                  }"
                  oninput="this.setCustomValidity('')"
                >
                <div class="validation"></div>
            </div>
              <div class="form-group">
                <textarea 
                  class="form-control" 
                  name="mensaje" 
                  id="mensaje" 
                  rows="3"  
                  placeholder="Mensaje"
                  required
                  oninvalid="
                  if (this.value ===''){
                      this.setCustomValidity('Ingresa el mensaje!')
                  }"
                  oninput="this.setCustomValidity('')"
                ></textarea>
                <div class="validation"></div>
              </div>
              <div id="buy-tickets-btn" class="text-center">
                <input type="submit" name = "submit" id="submit" value = "Enviar" ></input>
              </div>
        </form>
    </div>


  </div>
</section><!-- #contact -->
