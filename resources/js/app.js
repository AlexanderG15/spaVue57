require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

let router = new Router({
	routes: [
		{
			path: '/',
			component: require('./views/Home')
		},
		{
			path: '/nosotros',
			component: require('./views/About')
		},
		{
			path: '/archivo',
			component: require('./views/Archive')
		},
		{
			path: '/contacto',
			component: require('./views/Contact')
		}
	],
	linkExactActiveClass: 'active'
});

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