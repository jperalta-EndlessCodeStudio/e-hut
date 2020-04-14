import 'core-js/stable'
import Vue from 'vue'
import VueRouter from 'vue-router'
import CoreuiVue from '@coreui/vue'
import {iconsSet as icons} from './assets/icons/icons.js'
import store from "./store/index";

Vue.config.performance = true
Vue.use(VueRouter)
Vue.use(CoreuiVue)

import App from './views/App'
import router from './routes/index'

const app = new Vue({
    el: '#app',
    router,
    store,
    icons,
    components: {App},
});
