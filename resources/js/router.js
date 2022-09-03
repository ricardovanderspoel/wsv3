import Home from './components/pages/Home'
import Workbench from './components/pages/Workbench'
import Integrations from './components/pages/Integrations'
import Profile from './components/pages/Profile'
import Login from './components/pages/Login'
import Register from './components/pages/Register'
import Logout from './components/pages/Logout'
import Membership from './components/pages/Membership'
import Team from './components/pages/Team'
import Invoices from './components/pages/Invoices'

var VueRouter = require('vue-router')

const routes = [
    { path: '/', component: Home, meta: { title: 'Dashboard - MyApp' } },
    { path: '/workbench', component: Workbench, meta: { title: 'Workbench - MyApp' } },
    { path: '/integrations', component: Integrations, meta: { title: 'Integrations - MyApp' } },
    { path: '/profile', component: Profile, meta: { title: 'Profile - MyApp' } },
    { path: '/login', component: Login, meta: { title: 'Login - MyApp' } },
    { path: '/register', component: Register, meta: { title: 'Register - MyApp' } },
    { path: '/logout', component: Logout, meta: { title: 'Logout - MyApp' } },
    { path: '/membership', component: Membership, meta: { title: 'Membership - MyApp' } },
    { path: '/team', component: Team, meta: { title: 'Team - MyApp' } },
    { path: '/invoices', component: Invoices, meta: { title: 'Invoices - MyApp' } },
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
})

export default router;