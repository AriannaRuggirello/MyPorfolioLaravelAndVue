<!-- <script>



import AppFooter from './AppFooter.vue';
export default {

    components: {

    AppFooter
  },
}

</script>

<template>


    <header class="position-fixed  bg-white border-bottom">
        <nav class="navbar navbar-expand-lg">
    <div class="container-fluid" >
    <div class="navbar-brand">
        <RouterLink to="/home">
        <img style="width: 120px;" src="../../public/icone/logoNero.jpg" alt="">
        </RouterLink>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <router-link to="/home" style="text-decoration: none;" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#home">Torna alla Home</a>
        </li>
        </router-link>

        <router-link to="/privacypolicy" style="text-decoration: none;" >
            <li class="nav-item">
          <a class="nav-link" href="#privacypolicy">Privacy Policy</a>
        </li>
        </router-link>


      </ul>
    </div>
  </div>
</nav>

</header>



 <section id="privacypolicy" class="m-auto py-5" style="width: 80%;">
    <h2 class="pt-5 green">PRIVACY POLICY  &#128274;</h2>
    <div>
        La nostra politica sulla privacy descrive come raccogliamo, utilizziamo e proteggiamo le informazioni personali dei visitatori del nostro sito.
        <br><br>
        <h4 class="green">Raccolta e Utilizzo delle Informazioni</h4>

        Il nostro sito raccoglie solo le informazioni fornite volontariamente dagli utenti tramite il modulo di contatto per scopi di comunicazione e risposta alle richieste. Le informazioni raccolte non vengono condivise con terze parti e vengono utilizzate esclusivamente per rispondere alle richieste degli utenti.
        <br><br>
        <h4 class="green">Utilizzo dei Cookie</h4>

        Il nostro sito utilizza cookie solo per fini tecnici, come il mantenimento dello stato di navigazione o per fini analitici per comprendere meglio come gli utenti interagiscono con il sito. Questi cookie non raccolgono dati personali e possono essere disabilitati attraverso le impostazioni del browser.
        <br><br>
        <h4 class="green">Collegamenti a Siti Esterni</h4>

        Il nostro sito può contenere collegamenti a siti esterni, come il profilo GitHub dell'autore. Si prega di notare che non siamo responsabili delle pratiche sulla privacy di tali siti. Si consiglia di consultare le rispettive politiche sulla privacy.
        <br><br>
        <h4 class="green">Sicurezza</h4>

        Adottiamo misure di sicurezza adeguate per proteggere le informazioni personali degli utenti e prevenire l'accesso non autorizzato o la divulgazione.
        <br><br>
        <h4 class="green">Modifiche alla Privacy Policy</h4>

        La presente privacy policy potrebbe subire modifiche o aggiornamenti. Eventuali modifiche verranno pubblicate su questa pagina.
        <br><br>
        <h4 class="green">Contattaci</h4>

        Se hai domande o richieste in merito alla presente informativa sulla privacy, ti preghiamo di contattarci all'indirizzo email <a href="mailto:ruggirelloarianna11gmail.com">qui</a>.
        <br><br>
        <span class="text-secondary">Ultimo aggiornamento: 2023.</span>
    </div>
 </section>

 <AppFooter />
</template>

<style lang="scss">

header{
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    .nav-link{
        color: black;
    }
    .nav-link:hover, .nav-link:focus {
  color: #7abd87;
}

.navbar-collapse{
    flex-grow: 0;
}
.green{
    color:#7abd87 ;
}


@media (min-width: 992px) {
  .navbar-expand-lg .navbar-nav{
    gap: 30px;
  }
}}

</style> -->
