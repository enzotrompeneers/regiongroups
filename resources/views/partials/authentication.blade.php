<div class="authentication flex-vertical">
    <ul class="dropdown menu hide-for-small-only" data-dropdown-menu>
        @auth
             <li>
                <a class="button hollow" href="{{ route('portfolio.create') }}">
                    <i class="fa fa-plus"></i>
                    Nieuw portfolio
                </a>
            </li>
            <li class="is-dropdown-submenu-parent">
                <a href="#">{{ ucfirst(Auth::user()->name) }}</a>
                <ul class="menu">
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
            <li>
                <a class="button hollow" href="{{ route('register') }}">
                        <i class="fa fa-plus"></i>
                    Account maken
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <i class="fa fa-user-circle"></i>
                    Aanmelden
                </a>
            </li>
        @endauth
    </ul>        
    @include('partials.mobile-menu')
</div>
