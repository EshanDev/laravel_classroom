require('./bootstrap');


import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';

//Components
import Classroom from './components/classroom/ClassroomApp';

//Routes
import { routes } from './classroom_routes';
// ChartJS
import Chartjs from 'chart.js';

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router,
    components: { Classroom }
});
