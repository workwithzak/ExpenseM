        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <!-- bootstrap -->
            <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

                <!-- Optional theme -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
                <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
                a:hover {color: white;}
                </style>
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        </head>
        <body>
            <div style="width:100;">
            <!---if guest user __________________________________________-->
            @guest
                                
                                    <div class="w3-top">
                                        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
                                            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                                            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
                                            
                                            <div style="overflow: hidden;" class="mt-3">
                                                <a style="float: right;" class="mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                @if (Route::has('register'))
                                                    <a style="float: right;" class="mr-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                @endif
                                                </div>
                                        </div>
                                    </div>
                                @else
                    
            <!-- Navbar _________________________________________________________-->

                                    <div class="w3-top">
                                        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
                                            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                                            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
                                        @yield('navcontent')
                                            
                                        </div>
                                                
                                                    <a class="pull-right mr-4 mt-3" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                        </div>
                                            
                            </div>

                                    
                                    <!--  **************************************************************************** -->
                                @endguest
                

                <main class="py-4 mt-5">
                    @yield('content')
                </main>
            </div>

            <script>
        // Accordion
        function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else { 
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className = 
            x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        //function openNav() {
        //var x = document.getElementById("navDemo");
        //if (x.className.indexOf("w3-show") == -1) {
            //x.className += " w3-show";
        //} else { 
        // x.className = x.className.replace(" w3-show", "");
        //}
        //}
        </script>
        </body>
        </html>
