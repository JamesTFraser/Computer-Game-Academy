<div class="container header px-0">
    <h1 class="text-center py-3 my-0"><span>COMPUTER</span> <span>GAME</span> <span>ACADEMY</span></h1>
    <div class="sub-header row row-cols-1 row-cols-lg-3">
        <div class="col">
            @auth
                <a href="{{ url('profile') }}">Profile</a> /
                <form method="POST" class="d-inline" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}">Log in</a> /
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        <div class="col">
            <p class="text-center">Unity3D Game Development Tutorials</p>
        </div>
        <div class="col">
            <p class="text-end">{{ date("l j") }}<sup>{{ date("S") }}</sup> {{ date("F Y") }}</p>
        </div>
    </div>
</div>