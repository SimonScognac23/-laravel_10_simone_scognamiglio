<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
  <div class="container justify-content-center">

    <!-- Bottone per il menu mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenuto della Navbar -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center gap-4">

        <!-- Link alla Home -->
        <li class="nav-item">
          <a class="nav-link custom-nav-link" aria-current="page" href="{{ route('home.page') }}">
            Home
          </a>
        </li>

        <!-- Se l'utente NON è autenticato -->
        @guest
          <!-- if(!Auth::user()) pag.46 appunti LVDB Se l'utente è loggato il valore è true e tutto quello che viene dopo non viene visualizzato -->
          
          <!-- Link Registrati -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ route('register') }}">
              Registrati
            </a>
          </li>

          <!-- Link Accedi -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ route('login') }}">
              Accedi
            </a>
          </li>
        @endguest
        <!-- Fine sezione Registrati/Accedi -->

        <!-- Se l'utente È autenticato -->
        @auth
          <!-- Messaggio di Benvenuto e Logout -->
          <li class="nav-item d-flex flex-column align-items-center">

            <!-- Messaggio di benvenuto -->
            <a class="nav-link custom-welcome" href="#">
              Benvenuto
            </a>

            <!-- Form Logout -->
            <form method="POST" action="{{ route('logout') }}" class="d-flex flex-column align-items-center">
              @csrf
              <button type="submit" class="btn btn-outline-light btn-sm mt-2">
                Logout
              </button>
            </form>

            <!-- Form per la Storia Pokémon -->
            <form method="POST" action="{{ route('pokemon.history') }}" class="d-flex flex-column align-items-center">
              @csrf
              <button type="submit" class="btn btn-outline-warning btn-sm mt-2">
                Storia Pokémon
              </button>
            </form>

          </li>
        @endauth
        <!-- Fine sezione Benvenuto/Logout -->

      </ul>
    </div>
    <!-- Fine Contenuto Navbar -->

  </div>
</nav>
