window.axios = require('axios')
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

import Vue from 'vue'

import swal from 'sweetalert';

window.swal = swal

window.Popper = require('popper.js').default;
window.$ = require('jquery');
window.jQuery = require('jquery');
import "bootstrap";

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

Vue.component('delete-team', require('./components/teams/Delete.vue').default);
Vue.component('delete-category', require('./components/categories/Delete.vue').default);
Vue.component('delete-role', require('./components/permissions/DeleteRole.vue').default);
Vue.component('delete-permission', require('./components/permissions/DeletePermission.vue').default);
Vue.component('delete-user', require('./components/permissions/DeleteUser.vue').default);
Vue.component('delete-post', require('./components/posts/DeletePost.vue').default);
Vue.component('post-count', require('./components/posts/PostCount.vue').default);

const app = new Vue({
    el: '#app',
});
