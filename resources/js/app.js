require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

let router = new Router({
	routes: [
		{
			path: '/',
			component: {
				template: '<div>Esta es la página principal</div>'
			}
		},
		{
			path: '/nosotros',
			component: {
				template: '<div>Esta es la página nosotros</div>'
			}
		},
		{
			path: '/archivo',
			component: {
				template: '<div>Esta es la página archivo</div>'
			}
		}
	]
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
	el: '#app',
	router
});