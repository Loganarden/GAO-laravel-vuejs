import Vue from 'vue'
import Vuerouter from  'vue-router'
import Home from '../js/views/home.vue'
Vue.use(Vuerouter)

const router = new Vuerouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },

    ]
})

export default router;