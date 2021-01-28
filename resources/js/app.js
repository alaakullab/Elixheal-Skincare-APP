require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

Vue.component('admin-appdashboard', require('./components/admin/AppDasboard.vue').default);
const app = new Vue({
  el: '#app',
});
