<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Halwater') }}</title>

    <!-- Defautl Laravel Styles -->
    <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- Velonic Styles -->
    

    <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">

        <!--Animation css-->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
</head>
<body>
        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="#" class="logo-expanded">
                    <img src="{{asset('img/halicon.PNG')}}" alt="logo">
                    <span class="nav-label">HAL WATER</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="active"><a href="halwater.html"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a></li>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Charts</span><span class="badge bg-purple">1</span></a>
                        <ul class="list-unstyled">
                            <li><a href="morris-chart.html">Morris Chart</a></li>
                            <li><a href="chartjs.html">Chartjs</a></li>
                            <li><a href="flot-chart.html">Flot Chart</a></li>
                            <li><a href="rickshaw-chart.html">Rickshaw Chart</a></li>
                            <li><a href="peity-chart.html">Peity Chart</a></li>
                            <li><a href="c3-chart.html">C3 Chart</a></li>
                            <li><a href="other-chart.html">Other Chart</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->

    <div id="app">
            
     
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
            <!-- Chart JS -->
    
   <!--  <script src="{{asset('js/chartjs/chartjs.init.js')}}"></script>  -->
        
    <script src="{{asset('js/chartjs/chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.app.js')}}"></script> 
</body>
</html>
