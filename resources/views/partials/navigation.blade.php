@auth
    <li class="show-for-small-only">
        <a href="#">{{ ucfirst(Auth::user()->name) }}</a>
        <ul class="menu vertical nested">
            <li><a href="{{ route('profile.show', Auth::user()->name) }}">Jouw profiel</a></li>
            <li><a href="{{ route('portfolio.create') }}">Nieuw portfolio</a></li>
            <li>
                <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Uitloggen
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
@else
    <li class="show-for-small-only">
        <a href="{{ route('register') }}">
            Account maken
        </a>
    </li>
    <li class="show-for-small-only">
        <a href="{{ route('login') }}">
            Aanmelden
        </a>
    </li>
@endauth 
<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="">Over ons</a></li>
<li><a href="">Contact</a></li>

          