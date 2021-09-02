
<template>
  <div class="hello">
    <h1 class="text-center">TEST</h1>

  </div>
</template>

<script>
import axios from "axios";
export default {
  name: 'HelloWorld',
  data () {
    return {
      nomeleve: []
    }
  },
  props: {
    msg: String
  },
  methods:{
    appelApi: async function(){
      //Parcours de la collestion depuis input type text
      const response = await fetch('http://localhost/projet_backfront/backend/vues/elevesjson.php')
      //Reponse au format json
      this.eleve = await  response.json();
    }
  },
  mounted () {
    this.appelApi();
    axios
        .get('http://localhost/projet_backfront/backend/vues/elevesjson.php')
        .then(response => {
          this.nomeleve = response.data
          console.log(response.data)
        })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
