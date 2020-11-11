require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify';
import layout from '../js/layouts/layout.vue'
import router from '../js/router'
import 'vuetify/dist/vuetify.min.css';
Vue.use (Vuetify)

const app = new Vue({
    el: '#layout',
    vuetify:new Vuetify({}),
    router: router,
    components : {layout}
});

// export default app;
export default new Vuetify(app);

