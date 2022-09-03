require('./bootstrap')

import router from './router'
import Start from './components/Start'
import Login from './components/pages/Login'

import { i18nVue } from 'laravel-vue-i18n'

import { createApp } from 'vue'
import { createStore } from 'vuex'

import axios from 'axios'

const store = createStore({
  state () {
    return {
      count: 0
    }
  },
  mutations: {
    increment (state) {
      state.count++
    }
  }
})

const app = createApp({})


const axiosInstance = axios.create({
  withCredentials: true,
})

app.config.globalProperties.$axios = { ...axiosInstance }

app.use(router)

app.use(store)

app.component('login', Login)
app.component('start', Start)


app.use(i18nVue, {
    resolve: lang => import(`../lang/${lang}.json`),
}).mount('#app')