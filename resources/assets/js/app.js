import Notification from './components/Notification';

window.Vue = require('vue');
require('vue-resource');
require('./foundation');
require('./mobile-menu');
require('./login');

$(document).foundation();

Vue.http.interceptors.push(function(request) {
  request.method = 'POST';
  request.headers.set('X-CSRF-TOKEN', Cityofcompanies.csrfToken);
});

// Payment
Vue.component('CheckoutForm', require('./components/CheckoutForm.vue'));

