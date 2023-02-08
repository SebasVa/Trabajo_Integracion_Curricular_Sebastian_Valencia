<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <p>{{ $settings['footer_description'] ?? '' }}</p>
        </div>
        
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contáctanos</h4>
          <p>
            {!! $settings['footer_address'] ?? '' !!}<br>
            <strong>Teléfono:</strong> {{ $settings['contact_phone'] }}<br>
            <strong>Correo:</strong> {{ $settings['contact_email'] }}<br>
          </p>

          <div class="social-links">
            <a href="{{ $settings['footer_twitter'] ?? '' }}" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ $settings['footer_facebook'] ?? '' }}" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ $settings['footer_instagram'] ?? '' }}" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="{{ $settings['footer_linkedin'] ?? '' }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

      </div>
    </div>
  </div>
</footer><!-- #footer -->
