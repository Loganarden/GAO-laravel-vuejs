import axios from 'axios';
import poste from '../components/poste.vue';

export default {

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
