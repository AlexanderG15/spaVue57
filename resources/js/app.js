require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import router from './routes'

// require('vue2-animate/dist/vue2-animate.min.css');

/**
 * A continuación, crearemos una instancia de aplicación Vue nueva
 * y la adjuntaremos a la página. Luego, puede comenzar a agregar
 * componentes a esta aplicación o personalizar los andamios de
 * JavaScript para que se ajusten a sus necesidades únicas.
 */

Vue.component('post-header', require('./components/PostHeader'));
Vue.component('posts-list', require('./components/PostsList'));
Vue.component('posts-list-item', require('./components/PostsListItem'));
Vue.component('nav-bar', require('./components/NavBar'));
Vue.component('category-link', require('./components/CategoryLink'));
Vue.component('post-link', require('./components/PostLink'));
Vue.component('disqus-comments', require('./components/DisqusComments'));
Vue.component('paginator', require('./components/Paginator'));
Vue.component('pagination-links', require('./components/PaginationLinks'));

const app = new Vue({
	el: '#app',
	router
});