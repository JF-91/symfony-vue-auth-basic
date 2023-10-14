import { registerVueControllerComponents } from '@symfony/ux-vue';
import { createApp } from 'vue';
import router from './router'
import store from './store'
import App from './App.vue'
import './bootstrap.js';
import './styles/app.css';



createApp(App)
    .use(store)
    .use(router)
    .mount('#app');

registerVueControllerComponents(require.context('./vue/controllers', true, /\.vue$/));
