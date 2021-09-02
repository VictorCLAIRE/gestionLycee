<template>
  <div id="app">
    <div id="nav">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link" href="accueil">Accueil</a></li>
              <li class="nav-item active"><a class="nav-link" href="http://localhost/Projet_backfront/connexion">Connexion</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <HelloWorld/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
  }
}
</script>

<style>
  @import "../src/assets/css/bootstrap.css";
</style>
