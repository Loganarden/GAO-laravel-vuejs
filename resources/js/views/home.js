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

    },

    methods: {
         validate() {
             //  this.$refs.form.validate()
             if (this.isValid()) {
                const data = {
                    nomposte: this.nomposte,
                };
                axios.post('api/poste', data)
                    .then(({ data }) => {
                        this.$emit('store', data.data)
                        this.dialog = false
                    })
                    .catch(error => {
                        //TODO catch error
                        console.log(error);
                    });
            }

        },
        isValid() {
            return this.nomposte != ''
        }

    },

    mounted() {
        console.log('component mounted.')
    },

}
