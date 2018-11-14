require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import router from './routes'

/**
 * A continuación, crearemos una instancia de aplicación Vue nueva
 * y la adjuntaremos a la página. Luego, puede comenzar a agregar
 * componentes a esta aplicación o personalizar los andamios de
 * JavaScript para que se ajusten a sus necesidades únicas.
 */

Vue.component('post-header', require('./components/PostHeader.vue'));
Vue.component('nav-bar', require('./components/NavBar.vue'));

const app = new Vue({
	el: '#app',
	router
});