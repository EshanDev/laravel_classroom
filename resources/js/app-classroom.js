require ('./bootstrap');


import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';

//Components
import Classroom from './components/classroom/ClassroomApp';
import  Home from './components/classroom/views/Home';
import Profile from './components/classroom/views/About';
Vue.use(VueRouter);
Vue.use(Vuex);

const routes = [
    {
        path: '/',
        redirect: '/classroom'
    },

    {
        path: '/classroom',
        name: 'home',
        component: Home
    },
    {
        path: '/classroom/profile',
        name: 'profile',
        component: Profile
    },




];

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router,
    components: {Classroom}
});
