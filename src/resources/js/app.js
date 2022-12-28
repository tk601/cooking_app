import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import HomeComponent from "./components/HomeComponent";
import FooterComponent from "./components/FooterComponent";
import RefrigeratorComponent from "./components/RefrigeratorComponent";

import RecipeComponent from "./components/RecipeComponent";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
// ルータをインストール
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        // home画面
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        // 冷蔵庫
        {
            path: '/refrigerator',
            name: 'refrigerator',
            component: RefrigeratorComponent
        },
        {
            path: '/recipe',
            name: 'recipe',
            component: RecipeComponent
        },
    ]
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
Vue.component('home-component', HomeComponent);
Vue.component('footer-component', FooterComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

// export default router