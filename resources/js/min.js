import user from './mixins/user'
window._ = require('lodash')
import "../../node_modules/bootstrap/js/src/carousel.js"

import axios from 'axios'
window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

import Vue from 'vue'
import swal from 'sweetalert';
window.swal = swal;
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Layout
Vue.component('navigation', require('./components/Navigation.vue').default);
Vue.component('foot', require('./components/Footer.vue').default);

// Commentable
Vue.component('comments', require('./components/comments/Index.vue').default);

// Home
Vue.component('home', require('./components/Home.vue').default);
Vue.component('latest-post', require('./components/posts/Latest.vue').default);
Vue.component('team', require('./components/teams/Index.vue').default);
Vue.component('categories', require('./components/categories/Index.vue').default);


/**
 * Mixins
 */
Vue.mixin(user)

const app = new Vue({
    el: '#app',
});
