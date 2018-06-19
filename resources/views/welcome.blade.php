<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clickets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
    </div>
    </nav>
    </div>
            <div class="content">
                <div class="title m-b-md">
                    Clickets!
                </div>

                <div class="links">
                    <a href="{{route('event.index')}}">Events</a>
                    <a href="{{route('vacancies.index')}}">Vacancies</a>
                    <a href="{{route('advertisements.index')}}">Advertisements</a>
                    <a href="{{route('tickets.index')}}">Tickets</a>
                    <a href="{{route('secondhandtickets.index')}}">Second-Hand Tickets</a>
                    <a href="https://github.com/TechniekCollegeRotterdam/Clickets">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
