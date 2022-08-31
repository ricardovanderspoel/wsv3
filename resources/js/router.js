import Home from './components/pages/Home'
import Workbench from './components/pages/Workbench'
import Settings from './components/pages/Settings'
import Profile from './components/pages/Profile'

var VueRouter = require('vue-router')

const routes = [
    { path: '/', component: Home, meta: { title: 'Dashboard - MyApp' } },
    { path: '/workbench', component: Workbench, meta: { title: 'Workbench - MyApp' } },
    { path: '/settings', component: Settings, meta: { title: 'Settings - MyApp' } },
    { path: '/profile', component: Profile, meta: { title: 'Profile - MyApp' } },
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
})

export default router;