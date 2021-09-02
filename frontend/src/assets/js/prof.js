
    import axios from "axios";

    export default {
    name: 'professeurs',
    data () {
    return {
    professeurs: []
}
},
    methods:{
    appelApi: async function(){
    //Parcours de la collection depuis input type text
    const response = await fetch('http://localhost/projet_backfront/backend/vues/professeursjson.php')
    //Reponse au format json
    this.professeur = await  response.json();
}
},
    mounted () {
    this.appelApi();
    axios
    .get('http://localhost/projet_backfront/backend/vues/professeursjson.php')
    .then(response => {
    this.professeurs = response.data
    console.log(response.data)
})
}
}
