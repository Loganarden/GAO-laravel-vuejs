import axios from 'axios';

export default {

    data(){
        return {
            postes: { },
            dialog: false,
            clients: { },
            horaires: [],
        }
    },

    created() {

        axios.get('http://localhost:8000/api/poste')
        .then(response => this.postes = response.data)
        .catch(error=> console.log(error));

        axios.get('http://localhost:8000/api/attribution')
        .then(response => this.postes = response.data)
        .catch(error=> console.log(error));

        axios.get('http://localhost:8000/api/client')
        .then(response => this.clients = response.data)
        .catch(error=> console.log(error));

        this.buildHoraires();

    },

    methods: {
        initialise () {

            this.poste.attributions.forEach(attribution => {
                this.attributions[attribution.horaire] = {
                    id:attribution.id,
                    nomclient: attribution.client.nomclient,
                    prenomclient: attribution.client.prenomclient
                };
            });
            this.buildHoraires();
        },
        buildHoraires() {

              for (let i = 8; i <= 18; i++) {
                 var objet = {horaire:null,attribution:null}
                 objet.horaire = i
                 this.horaires.push(objet)
              }
             console.log(this.horaires);
        },
    },

    mounted() {
        console.log('component mounted.')
    }

}
