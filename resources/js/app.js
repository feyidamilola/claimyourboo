
require('./bootstrap');

window.Vue = require('vue');

Vue.component('Username', require('./components/Username.vue').default);
Vue.component('Claims', require('./components/Claims.vue').default);
Vue.component('Navbar', require('./components/Navbar.vue').default);
Vue.component('stepper', require('./components/Stepper.vue').default);

const app = new Vue({
    el: '#app'
});

