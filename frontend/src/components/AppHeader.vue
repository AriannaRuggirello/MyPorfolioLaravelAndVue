<script>
export default {
    name: "AppHeader",
    name: "AppFooter",

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
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacme">Contattami</a>
        </li>
        <!-- <router-link to="/privacypolicy" style="text-decoration: none;" >
            <li class="nav-item">
          <a class="nav-link" href="#privacypolicy">Privacy Policy</a>
        </li>
        </router-link> -->


      </ul>
    </div>
  </div>
</nav>

</header>


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

@media (min-width: 992px) {
  .navbar-expand-lg .navbar-nav{
    gap: 30px;
  }
}}
</style>
