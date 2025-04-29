<x-layout>

  <header class="header py-5 custom-header">
    <div class="container">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-12 col-md-6 p-4 border rounded shadow custom-card">
          <img
            src="https://staticg.sportskeeda.com/editor/2021/12/de48d-16396012401516-1920.jpg"
            alt="Foto HomePage"
            class="img-fluid mx-auto d-block mb-4 border border-danger rounded-circle shadow custom-img"
          />

          <h1 class="text-danger fw-bold custom-title">Registrati</h1>
        </div>
      </div>
    </div>
  </header>


  

    <x-display-errors/>

  <!-- CONTAINER PRINCIPALE -->
  <div class="container">
    <div class="row mt-5 justify-content-center text-center">
      <div class="col-12 col-md-8">
        <!-- Titolo della pagina -->
        <h1 class="mb-4 text-uppercase fw-bold text-primary custom-subtitle">
        Inserisci il tuo nome ed email... il Professor Oak ti sta aspettando!
        </h1>
      </div>

      <!-- FORM DI REGISTRAZIONE -->
      <!-- Il form invia i dati alla route 'register', fornita automaticamente da Laravel Fortify -->
      <!-- Vedi documentazione Laravel: https://laravel.com/docs/fortify#registration -->

      <!-- LINK ALLA ROTTA LARAVEL register -->
      <form
        action="{{ route('register') }}" 
        method="POST"
        class="p-5 border rounded shadow-lg custom-form"
      >
        @csrf <!-- Protezione contro attacchi CSRF -->

        <!-- Campo email dell'utente -->
        <div class="mb-3 text-start">
          <label for="email" class="form-label fw-bold text-danger">Email</label>
          <input type="email" name="email" class="form-control border-danger shadow-sm" id="email" placeholder="Inserisci la tua email">
        </div>

        <!-- Campo nome dell'utente -->
        <div class="mb-3 text-start">
          <label for="name" class="form-label fw-bold text-danger">Name</label>
          <input type="text" name="name" class="form-control border-danger shadow-sm" id="name" placeholder="Inserisci il tuo nome">
        </div>

        <!-- Campo password -->
        <div class="mb-3 text-start">
          <label for="password" class="form-label fw-bold text-danger">Password</label>
          <input type="password" name="password" class="form-control border-danger shadow-sm" id="password" placeholder="Crea una password">
        </div>

        <!-- Conferma della password -->
        <div class="mb-4 text-start">
          <label for="password_confirmation" class="form-label fw-bold text-danger">Confirmation Password</label>
          <input type="password" name="password_confirmation" class="form-control border-danger shadow-sm" id="password_confirmation" placeholder="Conferma la password">
        </div>

        <!-- Bottone di invio -->
        <div class="d-grid">
          <!-- Il submit invia tutto alla rotta 'register' (Laravel Fortify), che gestisce la logica di registrazione -->
          <button type="submit" class="btn btn-danger btn-lg fw-bold shadow custom-btn">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>

</x-layout>
