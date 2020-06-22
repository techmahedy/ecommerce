require('./bootstrap');

window.Vue = require('vue');

//All component
Vue.component('slug-widget', require('./components/SlugWidget.vue'));

const app = new Vue({
    el: '#app'
});
