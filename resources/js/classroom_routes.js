import Home from './components/classroom/views/Home';
import Profile from "./components/classroom/views/Pro";

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



