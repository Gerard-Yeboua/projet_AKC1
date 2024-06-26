 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets-app/img/hero-carousel/logo.jpeg') }}" alt="" width="200" height="300">
        <h1><span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('index') }}" >ACCUEIL</a></li>
          <li><a href="{{ route('presentation') }}">PRESENTATION</a></li>
          <li class="dropdown"><a href="{{ route('services') }}"><span>NOS SERVICES</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('genie_civil') }}">GENIE CIVIL & BTP</a></li>
              <li><a href="{{ route('environnement') }}">ENVIRONNEMENT</a></li>
              <li><a href="{{ route('energie') }}">ENERGIE</a></li>
              <li><a href="{{ route('travaux_public') }}">IMPORT-EXPORT</a></li>
            </ul>
          </li>
          <li><a href="{{ route('projects') }}">Projets réalisés</a></li>
          <li><a href="{{ route('showroom') }}">SHOWROOM</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
