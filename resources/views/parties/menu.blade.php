<header class="sticky-top">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-4 col-md-8">
            <div class="d-flex contact-info">
              <p class="mb-0">
                <i class="fas fa-map-marker"></i>
                <span>28 Street, New York City, USA</span>
              </p>
              <p class="mb-0">
                <i class="fas fa-envelope"></i>
                <span>PathyLoingo@gmail.com</span>
              </p>
              <p class="mb-0">
                <i class="fas fa-phone"></i>
                <span>+243 000 000 000</span>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-8 col-md-4">
            <div class="d-flex net-work justify-content-end">
              <span>Suivez-nous: </span>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              {{-- <p class="mb-0"> --}}
                  <a rel="alternate" hreflang="{{ $localeCode }}"
                      href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                      class="{{App::currentLocale() ===$localeCode?"active":""}}">
                      {{ $properties['native']}}
                  </a>
              {{-- </p> --}}
              @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </div>
      <nav class="navbar navbar-expand-lg">
        <div class="menu-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
          <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
              <i class="fas fa-hospital"></i>
              <span>MotherPatt</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto me-auto  mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{$titre==="Accueil"||$titre==="Home"?"active":""}} me-4" aria-current="page" href="{{ route('home') }}">@lang('info.menu.home')</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{$titre==="Qui suis-je"||$titre==="About me"?"active":""}}  me-4" href="{{ route('about') }}">@lang('info.menu.about')</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{$titre==="Services"||$titre==="Services"?"active":""}} me-4" href="{{ route('service') }}">@lang('info.menu.services')</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{$titre==="Témoignage"||$titre==="Clients feedback"?"active":""}} me-4" href="{{ route('feedback') }}">@lang('info.menu.temoignage')</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{$titre==="Galerie"||$titre==="Galery"?"active":""}} me-4" href="{{ route('galerie') }}">@lang('info.menu.Galerie')</a>
                </li>
              </ul>
            </div>
            <div class="flex">
              <a href="#" class="btn">Contact</a>
            </div>
          </div>
      </nav>
  </header>
  <div class="loading">
    <div id="loader"></div>
  </div>
    <div class="full-menu">
      <div class="close-menu">
        <span></span>
        <span></span>
      </div>
     <div class="content">
       <h1>@lang('info.titre.titreMenuMobile')</h1>
       <hr>
       <ul>
         <li>
          <a class="nav-link {{$titre==="Accueil"||$titre==="Home"?"active":""}} me-4" aria-current="page" href="{{ route('home') }}">@lang('info.menu.home')</a>

          <a class="nav-link {{$titre==="Qui suis-je"||$titre==="About me"?"active":""}}  me-4" href="{{ route('about') }}">@lang('info.menu.about')</a>

          <a class="nav-link {{$titre==="Services"||$titre==="Services"?"active":""}} me-4" href="{{ route('service') }}">@lang('info.menu.services')</a>

          <a class="nav-link {{$titre==="Témoignage"||$titre==="Clients feedback"?"active":""}} me-4" href="{{ route('feedback') }}">@lang('info.menu.temoignage')</a>

          <a class="nav-link {{$titre==="Galerie"||$titre==="Galery"?"active":""}} me-4" href="{{ route('galerie') }}">@lang('info.menu.Galerie')</a>

          <a href="#">
            Contact
          </a>
         </li>
       </ul>
       <h1>@lang('info.titre.titreInfoMobile')</h1>
       <hr>
       <p>
         <i class="fas fa-phone"></i>
         +243 000 000 000
       </p>
       <p>
        <i class="fas fa-envelope"></i>
        PathyLiongo@gmail.com
      </p>
      <div class="net-work d-flex justify-content-center mt-4">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
     </div>
    </div>