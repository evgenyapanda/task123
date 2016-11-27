<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="{{asset('js/jquery.bxslider.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider();
        });
    </script>

    <script src="{{asset('js/functions.js')}}"></script>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!-- bxSlider CSS file -->
    <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/font-awesome-4.6.3/css/font-awesome.min.css')}}">

    <link href="{{ asset ('css/style.css')}}" rel="stylesheet">

    <link href="{{ asset ('css/fonts.css') }}" rel="stylesheet">

</head>
<body>
<div class="wrapper">

    <div id="top">
        <div class="container">
            <div class="enter right">
                @if (Auth::guest())
                <a class="poplight" rel="popup_contact" href="{{ url('/register') }}">Registration</a>               <span>/</span>
                <a class="poplight" rel="popup_contact" class="button poplight" href="{{ url('/login') }}">Login</a>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </div>
        </div>
    </div>

    <div id="header">
        <div class="container clearfix">
            <div class="header">
                <div class="logo left">
                    <h1> hermes </h1>
                </div>
                <div class="navigation">

                    <div class="shipping right">
                        <div class="cart right">
                            <span>02</span>
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </div>

                        <a class="search right" href="#">
                            <i class="fa fa-search" aria-hidden="true"></i>&nbsp;
                        </a>

                    </div>

                    <div class="menu right" style="padding-top: 15px;">
                        <ul>
                            <li><a href="{{ url('/index') }}">home</a></li>
                            <li><a href="{{ url('/men') }}">men</a></li>
                            <li><a href="{{ url('/women') }}">women</a></li>
                            <li><a href="{{ url('/accessories') }}">accessories</a></li>
                            <li><a href="{{ url('/about_us') }}">about us</a></li>
                            <li><a href="#">blog</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@yield('slades')
@yield('content')

<div class="footer clearfix">
    <div class="container">

        <div class="contact left">
            <div class="logo">
                <h1>hermes</h1>
            </div>

            <p>
                Hermes is a premium eCommerce theme with advanced admin module.
            </p>

            <ul>
                <li class="tel">
                    <i class="fa fa-phone" aria-hidden="true">
                    </i>Telephone: +84 988 992 085
                </li>
                <li class="email">
                    <i class="fa fa-envelope-o" aria-hidden="true">
                    </i>Email: lamhvdesigner@gmail.com
                </li>
                <li class="work">
                    <i class="fa fa-clock-o" aria-hidden="true">
                    </i>8:00 - 19:00, Monday - Saturday, Sunday - closed
                </li>
            </ul>

            <button class="bytheme">
                By this theme
            </button>
        </div>

        <div class="inform left">
            <h3 class="footer-title">
                information
            </h3>
            <div class="delimiter"><hr></div>
            <ul class="footer-list">
                <li>
                    <a href="#">About us
                    </a>
                </li>
                <li>
                    <a href="#">Shipping & Return
                    </a>
                </li>
                <li>
                    <a href="#">Returns Privacy Notice
                    </a>
                </li>
                <li>
                    <a href="#">Conditions of Use
                    </a>
                </li>
                <li>
                    <a href="#">RSS
                    </a>
                </li>
            </ul>
        </div>

        <div class="inform left">
            <h3 class="footer-title">
                SERVICE
            </h3>
            <div class="delimiter"><hr></div>
            <ul class="footer-list">
                <li>
                    <a href="#">Online support
                    </a>
                </li>
                <li>
                    <a href="#">Help & FAQs
                    </a>
                </li>
                <li>
                    <a href="#">Call Center
                    </a>
                </li>
                <li>
                    <a href="#">Contact Us
                    </a>
                </li>
                <li>
                    <a href="#">Custom Link
                    </a>
                </li>
            </ul>
        </div>

        <div class="inform left">
            <h3 class="footer-title">
                MY ACCOUNT
            </h3>
            <div class="delimiter"><hr></div>
            <ul class="footer-list">
                <li>
                    <a href="#">Online support
                    </a>
                </li>
                <li>
                    <a href="#">Wish List
                    </a>
                </li>
                <li>
                    <a href="#">Site Map
                    </a>
                </li>
                <li>
                    <a href="#">Custom Link
                    </a>
                </li>
                <li>
                    <a href="#">Custom Link
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="footer-bottom clearfix">
    <div class = "container">
        <div class="copuring">

                    <span>Copyright © 2016 by
                                <a href="#">Pixel-Creative
                                </a>
                            </span>

        </div>

        <div class="menu-footer right">
            <ul>

                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Arrival
                    </a>
                </li>
                <li>
                    <a href="#">
                        Site map
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
</body>
</html>