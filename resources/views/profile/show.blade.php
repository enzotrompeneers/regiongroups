@extends('layouts.web.master')

@section('pre-scripts')
<script>
    window.onload = function () {
    const app = new Vue({
        el: '#checkout'
    });
}
</script>
@endsection

@section('content')
        @auth
            <div class="card-profile-stats">
                <div class="card-profile-stats-intro">
                    <img class="card-profile-stats-intro-pic" src="{{ asset("img/profile-avatar.png") }}" alt="{{ Auth::user()->name }}" />
                    <div class="card-profile-stats-intro-content">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p>
                            Geregistreerd: {{  Auth::user()->created_at->diffForHumans() }} <br>
                            Email: {{ Auth::user()->email }}
                            
                        </p>
                        <div id="checkout" class="padding-top">
                            <checkout-form></checkout-form>
                        </div>
                    </div>
                </div>
                
                <div class="card-profile-stats-container">
                    <div class="card-profile-stats-statistic">
                        <span class="stat">{{count($portfolios)}}</span>
                        <p>portfolios</p>
                    </div>

                    <div class="card-profile-stats-statistic">
                        <span class="stat">{{count($portfolios)}}</span>
                        <p>portfolios</p>
                    </div>

                    <div class="card-profile-stats-statistic">
                        <span class="stat">{{$amount_reviews}}</span>
                        <p>reviews</p>
                    </div>
                </div>
                
                <div class="card-profile-stats-more">
                    <p class="card-profile-stats-more-link"><a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                    <div class="card-profile-stats-more-content">
                        <div class="grid-container">
                                @include('portfolios.portfolio')
                        </div>
                        
                    </div>
                </div>
            </div>
        @endauth
    
@endsection

@section('post-scripts')
<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
    // more click
$('.card-profile-stats-more-link').click(function(e){
  e.preventDefault();
  if ( $(".card-profile-stats-more-content").is(':hidden') ) {
    $('.card-profile-stats-more-link').find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
  } else {
    $('.card-profile-stats-more-link').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
  }
  $(this).next('.card-profile-stats-more-content').slideToggle();
});


</script>
@endsection


