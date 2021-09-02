
<template>
  <div class="hello">
    <h1 class="text-center">TEST</h1>
    <div class="row text-center">
      <div class="col-6">
        <h4>Élèves</h4>
        <div class="tableau">
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Date de naissance</th>
              <th scope="col">Détails</th>
            </tr>
            </thead>
            <tbody>
            <tr class="table-info"
                v-for="(eleve, index) in eleves" v-bind:key="index"
            >
              <th scope="col">
                {{ eleve.nom }}
              </th>
              <th scope="col">
                {{ eleve.prenom }}
              </th>
              <th scope="col">
                {{ eleve.date_de_naissance }}
              </th>
              <th scope="col"><a href="" class="btn btn-dark">Détails</a></th>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-6">
        <h4>Professeurs</h4>
        <div class="tableau">
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Matière</th>
              <th scope="col">Détails</th>
            </tr>
            </thead>
            <tbody>
            <tr class="table-info"
                v-for="(professeur, index) in professeurs" v-bind:key="index"
            >
              <th scope="col">
                {{ professeur.nom }}
              </th>
              <th scope="col">
                {{ professeur.prenom }}
              </th>
              <th scope="col">
                {{ professeur.matiere }}
              </th>
              <th scope="col"><a href="" class="btn btn-dark">Détails</a></th>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'Eleve',
  data () {
    return {
      eleves: [],
      professeurs:[]
    }
  },
  methods:{
    appelApi: async function(){
      //Parcours de la collection depuis input type text
      const response = await fetch('http://localhost/projet_backfront/backend/vues/elevesjson.php')
      //Reponse au format json
      this.eleve = await  response.json();
    },
    appelApiProf: async function(){
      //Parcours de la collection depuis input type text
      const response = await fetch('http://localhost/projet_backfront/backend/vues/professeursjson.php')
      //Reponse au format json
      this.professeur = await  response.json();
    }
  },
  mounted () {
    this.appelApi();
    axios
        .get('http://localhost/projet_backfront/backend/vues/elevesjson.php')
        .then(response => {
          this.eleves = response.data
          console.log(response.data)
        })

    this.appelApiProf();
    axios
        .get('http://localhost/projet_backfront/backend/vues/professeursjson.php')
        .then(response => {
          this.professeurs = response.data
          console.log(response.data)
        })

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
