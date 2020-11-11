import axios from 'axios';
import poste from '../components/poste.vue';

export default {

    data: () => ({
        valid: true,
        poste: '',
        posteRules: [
            V => !!v || 'Un nom est requis !',
        ],
    }),

    methods: {
        validate () {
            this.$ref.form.validate()
        }
    },

    components: {
        poste
    },

    data(){
        return {
            clients: { },
            dialog: false,
        }
    },

    created() {
         axios.get('http://localhost:8000/api/client')
         .then(response => this.clients = response.data)
         .catch(error=> console.log(error));
    },

    mounted() {
        console.log('component mounted.')
    }

}
