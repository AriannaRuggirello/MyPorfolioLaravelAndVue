
import 'bootstrap/dist/css/bootstrap.css'
import '../scss/style.scss';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'



//Importazioni pagine vueRouter
import Home from "./components/Home.vue";
import Show from "./components/Show.vue";
// import PrivacyPolicy from "./components/PrivacyPolicy.vue";



//Creazione rotte
const routes = [
    { path: '/home', component: Home },
    { path: '/show/:id', component: Show},
    // { path: '/privacypolicy', component: PrivacyPolicy},


]

const router = createRouter({
    history: createWebHistory(),
    routes
})
createApp(App).use(router).mount('#app')
