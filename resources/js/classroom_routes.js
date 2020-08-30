import Home from './components/classroom/views/Home';
import Profile from './components/classroom/views/Profiles';
import Playlist from './components/classroom/views/Playlist';



export const routes = [

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
			{
				path: '/classroom/playlist',
				name: 'playlist',
				component: Playlist
			}
];
