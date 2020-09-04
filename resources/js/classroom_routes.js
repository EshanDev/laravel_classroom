import Home from './components/classroom/views/Home';
import Profile from './components/classroom/views/Profiles';
import Playlist from './components/classroom/views/Playlist';
import Quiz from './components/classroom/views/Quiz';
import EditProfile from './components/classroom/views/EditProfile';



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
			},
			{
				path: '/classroom/quiz',
				name: 'quiz',
				component: Quiz
			},
			{
				path: '/classroom/edit-profile',
				name: 'edit-profile',
				component: EditProfile
			}
];
