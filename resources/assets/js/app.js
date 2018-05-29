import Notification from './components/Notification';

require('./foundation');
$(document).foundation();

window.Vue = require('vue');
require('vue-resource');

Vue.http.interceptors.push(function(request) {
    request.method = 'POST';
    request.headers.set('X-CSRF-TOKEN', Cityofcompanies.csrfToken);
  });

Vue.component('CheckoutForm', require('./components/CheckoutForm.vue'));