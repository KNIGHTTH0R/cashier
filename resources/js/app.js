
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.prototype.$event = new Vue();
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('edit-button', require('./components/units/EditButton.vue'));
Vue.component('edit-form', require('./components/units/EditForm.vue'));
Vue.component('delete-model', require('./components/DeleteModel.vue'));

Vue.component('cashier', require('./components/cashier/Cashier.vue'));

const app = new Vue({
    el: '#app'
});
