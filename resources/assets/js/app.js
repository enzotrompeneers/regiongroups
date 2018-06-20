import Notification from './components/Notification';
import Typed from 'typed.js';
 
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

if ($(".typer")[0]){
  let typer = new Typed('.typer', {
       stringsElement: '#typed-strings',
       typeSpeed: 30,
       loop: true,
       startDelay: 1000,
       backDelay: 2000
   });
}

// Payment
Vue.component('CheckoutForm', require('./components/CheckoutForm.vue'));

// Sessions
window.setTimeout(function() {
  $(".sessions>.callout").fadeTo(1000, 0).slideUp(500, function(){
      $(this).remove(); 
  });
}, 3000);

// Rating
$(document).ready(function(){
  $(".rating input:radio").attr("checked", false);

  $('.rating input').click(function () {
      $(".rating span").removeClass('checked');
      $(this).parent().addClass('checked');
  });

  $('input:radio').change(
  function(){
      var userRating = this.value;
  }); 
});