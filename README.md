Italiano

In questa sezione del mio progetto Laravel, ho sviluppato una navbar dinamica utilizzando Bootstrap e Blade, integrando il sistema di autenticazione fornito da Laravel Fortify. Il sito è dedicato all’universo Pokémon, e questa barra di navigazione consente una gestione semplice e chiara delle azioni di login, registrazione e logout.

Nello specifico:

Ho strutturato una navbar responsive e centrata, compatibile con dispositivi mobili.

Se l’utente non è autenticato (@guest), vengono mostrati i link per registrarsi e accedere tramite le route predefinite di Laravel Fortify.

Se invece l’utente è autenticato (@auth), appare un messaggio di benvenuto, accompagnato da due form:

uno per effettuare il logout in modo sicuro (con protezione CSRF),

e uno per accedere a una sezione chiamata “Storia Pokémon”, che rappresenta una funzionalità personalizzata del sito.

Questo codice dimostra la mia capacità di:

gestire autenticazione e autorizzazione utente con Laravel Fortify,

strutturare interfacce utente pulite e responsive con Blade e Bootstrap,

implementare logiche condizionali per personalizzare l’esperienza in base allo stato dell’utente.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


English 

In this section of my Laravel project, I developed a dynamic navbar using Bootstrap and Blade, fully integrated with Laravel Fortify for user authentication. The site is themed around the Pokémon universe, and this navigation bar handles login, registration, and logout functionality in a clean and user-friendly way.

Specifically:

I built a responsive and centered navbar that works seamlessly on mobile devices.

When the user is not authenticated (@guest), the navigation shows links to register and log in, using Laravel Fortify's default routes.

When the user is authenticated (@auth), a welcome message is displayed along with two forms:

one for secure logout (with CSRF protection),

and another for accessing a custom feature called “Pokémon History.”

This code demonstrates my ability to:

manage user authentication and authorization using Laravel Fortify,

design responsive UI components with Blade and Bootstrap,

implement conditional rendering to tailor the experience based on the user’s login status.


