import axios from 'axios';

export default {

    data(){
        return {
            postes: { },
            dialog: false,
        }
    },

    created() {

        axios.get('http://localhost:8000/api/poste')
        .then(response => this.postes = response.data)
        .catch(error=> console.log(error));

    },

    mounted() {
        console.log('component mounted.')
    }

}
