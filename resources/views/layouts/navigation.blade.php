<div class="nav-mobile container border-top border-bottom border-5 mb-4">
	<a id="menu-button" class="menu-item py-2" href="#">OPEN MENU</a>
	<div class="menu-items" id="menu-items">
        @auth
            <a href="{{ url('/profile') }}" class="menu-item">PROFILE</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                   class="menu-item pt-2"
                   onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('LOG OUT') }}
                </a>
            </form>
        @else
            <a href="{{ route('login') }}" class="menu-item">LOG IN</a>
            <a href="{{ route('register') }}" class="menu-item pt-2">REGISTER</a>
        @endauth
		<a class="menu-item pt-2" href="/">HOME</a>
		<a class="menu-item pt-2" href="/tutorials/">TUTORIALS</a>
		<a class="menu-item py-2" href="/about/">ABOUT</a>
	</div>
</div>

<div class="container nav border-top border-bottom border-5 px-3 pt-1 mb-4">
    <a href="/">HOME</a>
    <p class="pt-2 mb-0">✹</p>
    <a href="/tutorials/">TUTORIALS</a>
    <p class="pt-2 mb-0">✹</p>
    <a href="/showcase/">SHOWCASE</a>
    <p class="pt-2 mb-0">✹</p>
    <a href="/about/">ABOUT</a>
</div>
