
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./main');

window.Vue = require('vue');

import Vuex from 'vuex'
import VeeValidate from 'vee-validate';
import Toasted from 'vue-toasted';
import VuejsPaginate from 'vuejs-paginate'
import Treeselect from '@riophae/vue-treeselect'
import '@riophae/vue-treeselect/dist/vue-treeselect.css'

Vue.use(Vuex)
Vue.use(VeeValidate);
Vue.use(Toasted)
Vue.component('treeselect', Treeselect);
Vue.component('paginate', VuejsPaginate);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('task-index', require('./components/tasks/Index.vue').default);

//Project
Vue.component('project-index', require('./components/clients/projects/Index.vue').default);
Vue.component('project-create', require('./components/clients/projects/Create.vue').default);
Vue.component('project-show', require('./components/clients/projects/Show.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
