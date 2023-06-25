require('./bootstrap');
//  import { createApp } from 'vue';
//  import  App  from './App.vue';
//  createApp(App).mount("#App");
window.Vue =require('vue');
Vue.component('create-component', require('./components/CreateComponent.vue').default);

const app = new Vue({
    el: '#app',
});