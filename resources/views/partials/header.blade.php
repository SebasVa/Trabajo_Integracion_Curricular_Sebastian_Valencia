<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          EPN
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Inicio</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">Acerca de</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Conferencistas</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Horarios</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Ubicación</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#faq">Preguntas frecuentes</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contacto</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#buy-tickets">Comprar Tickets</a></li>
        @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">Acceso</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">Panel</a></li>
            @endauth
      </ul>
    </nav>
  </div>
</header>
