import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import Classroom from './components/ClassroomComponent.vue'
import Home from './components/classroom/views/Home'
import About from './components/classroom/views/About'
const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/',
        name: 'home',
        component: Home
    }, {
        path: '/about',
        name: 'about',
        component: About
    }]
});
const classroom = new Vue({
    el: '#app',
    components: {Classroom},
    router
});


export default router
