<x-layout>



  <!-- HEADER -->
  <header class="header py-5 bg-psycho">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        
        <!-- TESTO A SINISTRA -->
        <div class="col-12 col-md-6 p-4 text-description">
          <h2 class="title-psycho mb-3">Un'avventura senza tempo!</h2>
          <p class="text-psycho">
            Tornare ai tempi dei primi GameBoy significa rivivere la vera magia dei Pokémon: 
            esplorare Kanto pixel per pixel, catturare il tuo primo Charmander, e sfidare la Lega Pokémon
            con solo 8 bit di grafica e tantissima immaginazione!  
            Un viaggio che ha acceso la passione per milioni di allenatori nel mondo.
          </p>
        </div>

        <!-- IMMAGINE A DESTRA -->
        <div class="col-12 col-md-6 p-4 border rounded shadow header-box">
          <img
            src="https://s1.qwant.com/thumbr/474x579/9/2/e16f1075697faf32e4bc866adac8a3c117951edc17136d930fc852413c1c02/th.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%3Fid%3DOIP.a1-lonAGu22QPehOmfV95wHaJD%26pid%3DApi&q=0&b=1&p=0&a=0.jpg"
            alt="Logo Pokémon"
            class="img-fluid mx-auto d-block mb-4 pokemon-logo"
          />
          <h1 class="text-center title-psycho">Area Allenatori Psico</h1>
        </div>

      </div>
    </div>  
  </header>

  <!-- DISPLAY ERRORI (se presenti) -->
  <x-display-errors/>


  <!-- FORM DI LOGIN -->
  <div class="container">
    <div class="row mt-5 justify-content-center text-center">
      
      <!-- COLONNA SOLO PER IL TITOLO -->
      <div class="col-12 col-md-8 mb-4">
        <h2 class="mission-text">Inserisci il tuo nome ed email per iniziare la tua avventura!!!</h2>
      </div>
    
    </div>

    <!-- FORM DI LOGIN -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <form action="{{ route('login') }}" method="POST" class="p-4 border rounded form-psycho shadow">
          @csrf

          <!-- CAMPO EMAIL -->
          <div class="mb-3 text-start">
            <label for="email" class="form-label label-psycho">Email</label>
            <input type="email" name="email" class="form-control input-psycho" id="email" placeholder="Inserisci la tua email">
          </div>

          <!-- CAMPO PASSWORD -->
          <div class="mb-3 text-start">
            <label for="password" class="form-label label-psycho">Password</label>
            <input type="password" name="password" class="form-control input-psycho" id="password" placeholder="Inserisci la tua password">
          </div>

          <!-- BOTTONE LOGIN -->
          <div class="d-grid">
            <button type="submit" class="btn btn-psycho btn-lg text-dark">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>

</x-layout>
