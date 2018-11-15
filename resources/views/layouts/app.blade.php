<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Linda Carlstad') }}</title>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('img/icon.ico') }}" rel="icon">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
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

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-3 d-none d-md-block text-center">
                   <a href="">
                   <img src="img/logo.png" alt="Linda Carlstad logo">
                   </a>
               </div>
               <div class="col-12 col-md-3">
                   <p>
                       <span>Linda Carlstad</span>
                       <br>
                       Universitetsgatan 2
                       <br>
                       651 68 Karlstad
                       <br>
                       <a href="whoops.php" class="special">Whoops</a>
                   </p>
               </div>
               <div class="col-12 col-md-3">
                   <p>
                       <span>Länkar</span>
                       <br>
                       <a href="http://tentahub.se/linda">Tentor</a>
                       <br>
                       <a href="http://lindacarlstad.se/robot/terminal.html">Terminal</a>
                       <br>
                       <!-- <a href="events.php">Event</a>
                       <br> -->
                       <a href="documents.php">Dokument</a>
                       <br>
                       <a href="http://lindacarlstad.tictail.com/">Webshop</a>
                   </p>
               </div>
               <div class="col-12 col-md-3">
                   <p>
                       <span>Föreningen</span>
                       <br>
                       <a href="about.php">Om oss</a>
                       <br>
                       <!-- <a href="new-member.php">Bli medlem</a>
                       <br> -->
                       <a href="https://www.facebook.com/linda.carlstad/">Facebook</a>
                       <br>
                       <a href="https://www.instagram.com/lindacarlstad/">Instagram</a>
                       <br>
                       <a href="https://github.com/Linda-Carlstad">Github Team</a>
                       <br>
                       <a href="mailto:info@lindacarlstad.se">info@lindacarlstad.se</a>
                       <br>
                       <a href="secret.php" class="special">Secret</a>
                   </p>
               </div>
           </div>
       </div>
   </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript" defer></script>
</body>
</html>
