import Notification from './components/Notification';


require('./bootstrap');
window.Vue = require('vue');
require('vue-resource');

Vue.http.interceptors.push((request, next) => { 
    request.headers.set('X-CSRF-TOKEN', Cityofcompanies.csrfToken); 
    next(); 
});

Vue.component('CheckoutForm', require('./components/CheckoutForm.vue'));



