<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('redirect')

    <title>Tv Repair Parts!</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'> --}}
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('head')


</head>
<body id="app-layout">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span style="color:khaki;font-size:30px">Ricambi</span>
                <span style="color:white;font-weight:bold;font-size:30px">TV</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if(Auth::user())
                    <li><a href="{{ url('/tv') }}" role="button">Elenco Ricambi</a></li>
                @else
                    <li><a href="{{ url('/cerca') }}" role="button">Compatibilità</a></li>
                    <li><a href="{{ url('/contatto') }}" role="button">Contattaci!</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
                <li><i class="fa fa-cog fa-spin fa-fw"></i>Willy 2016</li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<div class="text-center" style="padding-right:15px">
    <a href={{ url('http://www.elettronicalowcost.it') }} target=_blank>
        <img src={{ asset('imgs/logoLC.png') }}
    </a>
    <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
    <!-- Histats.com  START  (aync)-->
    <script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,3452208,4,601,110,30,00011000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
    hs.src = ('//s10.histats.com/js15_as.js');
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
    <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3452208&101" alt="contatore accessi" border="0"></a></noscript>
    <!-- Histats.com  END  -->
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>

@yield('scripts')

<script src="js/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar(
        'Questo sito utilizza i cookie per migliorare servizi e esperienza dei clienti. Se decidi di continuare la navigazione consideriamo che accetti il loro uso.',
        'Chiudi', 'Maggiori Informazioni', '/informativa');
  });
</script>

</body>
</html>