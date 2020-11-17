import axios from 'axios';
import poste from '../components/poste.vue';

export default {

    components: {
        poste,
    },

    data: () => {

        return {
            clients: {},
            postes: {},
            dialog: false,
            valid: true,
            nomposte: ' ',
            posteRules: [
            v => !!v || 'un poste est requis!'
            ]
        }
    },


    created() {
          axios.get('http://localhost:8000/api/client')
          .then(response => this.clients = response.data)
          .catch(error=> console.log(error));

        axios.get('/api/poste')
            .then(response => this.postes = response.data)
            .catch(error => console.log(error));

        // axios.post('api/poste', {
        //     nomposte: this.nomposte,
        // })
        //     .then(response => this.postesID = response.data.id)
        //     .catch(error => console.log(error));
    },

    methods: {
         validate() {
             //  this.$refs.form.validate()
            if (this.isvalid()) {
                const data = {
                    nomposte: this.nomposte,
                };
                axios.post('/api/poste/', {
                    nomposte: this.nomposte
                })
                .then(response => this.postes = response.data)
                .catch(error => console.log(error));
            }
        },

        isvalid() {
            return this.name !=''
        }

    },

    mounted() {
        console.log('component mounted.')
    },

}
