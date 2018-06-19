<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    <div id="nav">
        <nav class="navbar">
            <div class="flex-container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('Clickets!') }}
                </a>
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li>
                                <a class="username" href="http://localhost/Clickets/public/home">
                                    Hallo, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
    <header class="row">

    </header>

    <main>

        @yield('content')

    </main>
    <footer class="row">

    </footer>

</body>
</html>
