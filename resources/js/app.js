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

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
	el: '#app',
	router
});