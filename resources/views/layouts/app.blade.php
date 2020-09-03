<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nanigoto なにごと') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style type="text/css">   
        .input:focus{border-color: transparent;} 
        .input:hover{border-color: transparent} 
        .input,.textarea{color:white; border-color: transparent}
    </style>

</head>
<body class="hero has-background-black-bis is-fullheight">
    <div id="app">
        <nav class="navbar has-background-black">
          <div class="container">
            <div class="navbar-brand ml-3">
              <a class="navbar-item" href="{{ url('/') }}">
                <strong class="has-text-grey-lighter">Nanigoto </strong>
                <strong class="has-text-primary">&nbsp;なにごと</strong>
              </a>
              <div class="navbar-brand " data-target="navbar">
                <div class="container mt-3 is-hidden-desktop">
                    @guest 
                        <a href="{{route('login')}}" class="button is-black is-small has-text-primary">
                        Login
                        </a>                      
                        <a href="{{route('register')}}" class="button is-black is-small has-text-primary">
                            Register
                        </a>
                    @else
                        
                    @endguest
                </div>
              </div>
            </div>
            <div class="navbar-end  is-hidden-touch " id="navbar">
              <div class="container mt-3">
                @guest                      
                    <a href="{{route('login')}}" class="button is-black is-small has-text-primary">
                        Login
                    </a>                      
                    <a href="{{route('register')}}" class="button is-black is-small has-text-primary">
                        Register
                    </a>
                @else
                    <a class="button is-small is-black has-text-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <span class="icon is-small">
                          <i class="fas fa-power-off"></i>
                        </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
              </div>  
            </div>
          </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>

{{-- 
      
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 --}}