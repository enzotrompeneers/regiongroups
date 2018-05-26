<div class="navigation">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="">Over ons</a></li>
        <li><a href="{{ route('search') }}">Zoeken</a></li>
        <li><a href="">Contacteren</a></li>
        @auth
            <li><a href="{{ route('profile.show', Auth::user()->name) }}">{{ Auth::user()->name }}</a></li>
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
        @else
            <li><a href="{{ route('login') }}">Inloggen</a></li>
            <li><a href="{{ route('register') }}">Registreren</a></li>
        @endauth
    </ul>
</div>
        