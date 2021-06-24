<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="width=device-width, initial-scale=1.0">

  <title>{{ $title ?? config('app.name', 'Raseteur-Miramas') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
  <!-- css -->
  <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
</head>

<body>
  <div class="container">
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('Home')}}">Accueil
                <!--<span class="lg-only">(current)</span>-->
              </a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ecole raseteur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('Apropos')}}">A propos</a>
          <a class="dropdown-item" href="{{route('Classement')}}">Classement</a>
        </div>
      </li>
            <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Articles</a>
                        </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{route('Boutique')}}">Boutique</a>
            </li>
            <!-- <li class="nav-item">
                            <a class="nav-link" href="info.html">A propos</a>
                        </li> -->

            <li class="nav-item">
              <a class="nav-link" href="{{route('Evenement')}}">Evenement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Faire un don</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Partner')}}">Nos partenaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Contact')}}">Contactez-Nous</a>
            </li>
          </ul>
          <form action="" method="get">
            <div class="form-inline">
              <label for="search" class="form-label mr-5 sr-only">Rechercher: </label>
              <input type="search" name="search" id="search" class="form-control mt-1" placeholder="un article, un evenemnt, une personne etc..">
             
            </div>
   
        </form>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
      </div>
    </nav>

    <div class="container-fluid bg-white">

      
      @yield('content')
    </div>


    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>S'inscrire à notre Newsletter</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-dark mb-4">
                  <label class="form-label" for="email_NL mt-2">addresse E-mail</label>
                  <input type="email" id="email_NL" class="form-control" />

                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-primary mt-4">
                  Envoyer
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgb(204, 191, 158);">
        © 2021 Copyright:
        <a class="text-white" href="#"></a>
      </div>
      <!-- Copyright -->
    </footer>

    </div>
</div>
  <script src="{{asset('js/carousel.js')}}"></script>
  <script src="{{asset('js/bundle.js')}}"></script>
</body>

</html>