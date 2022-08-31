require('./bootstrap')

import router from './router'
import Start from './components/Start'
import { i18nVue } from 'laravel-vue-i18n'

import { createApp } from 'vue'
const app = createApp({})

app.use(router)

app.component('start', Start)

app.use(i18nVue, {
    resolve: lang => import(`../lang/${lang}.json`),
}).mount('#app')