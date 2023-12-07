@include('layouts.frame.head')

<body>
<header class="site-header sticky-top py-1">
    <div id="app">

        @auth
            <main class="d-flex flex-nowrap">
                @include('layouts.navbar.auth.sidenav')
                @yield('content')
            </main>
        @endauth
        @include('components.theme')

        @guest
            @if (in_array(request()->route()->getName(),
                    ['login', 'register', 'password.request', 'password.email', 'password.reset']))
                <main>
                    @yield('content')
                </main>
            @else
                @include('layouts.navbar.guest.topnav')
                <main>
                    @yield('content')
                </main>
            @endif
        @endguest
        {{-- @include('layouts.footer.guest.footer') --}}
    </div>

    @include('layouts.frame.foot')
</header>
</body>

</html>
