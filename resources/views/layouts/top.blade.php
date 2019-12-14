<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ secure_asset('js/menu.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        
        <!--favicon-->
        <link ref="icon" type="image/png" href="img/favicon.png">
    </head>
    <body>
        <div id="app">
            <header class="container-fluid header_wrap">
                <div class="container">
                    <div class="row">
                        
                      <nav class="global-nav">
                        <ul class="global-nav__list">
                          <li class="global-nav__item"><a href="{{ url('/register') }}">Register</a></li>
                          <li class="global-nav__item"><a href="{{ url('/login') }}">Login</a></li>
                        </ul>
                      </nav><!--global-nav-->
                      
                      <div class="hamburger" id="js-hamburger">
                        <span class="hamburger__line hamburger__line--1"></span>
                        <span class="hamburger__line hamburger__line--2"></span>
                        <span class="hamburger__line hamburger__line--3"></span>
                      </div><!--humburger-->
                      <div class="black-bg" id="js-black-bg"></div>
                        
                        
                        

                        <div class="col-sm-12 top_img_box">
                            <img src="img/logo_acots.png" alt="logo">
                        </div><!--col-sm-12-->
                        
                        <div class="nav-list d-flex justify-content-between">
                            <a href="{{ url('/#about') }}">About</a>
                            <a href="{{ url('/#skill') }}">Skill</a>
                            <a href="{{ url('/#work') }}">Work</a>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </div><!--nav-list-->
                    </div><!--row->
                </div><!--container-->
            </header>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            
            {{-- フッターナビ --}}
            <footer>
                <div class="container d-flex justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo_acots.png') }}" alt="logo">
                    </a>
                    <div class="nav-list d-flex justify-content-between">
                        <a href="{{ url('/#about') }}">About</a>
                        <a href="{{ url('/#skill') }}">Skill</a>
                        <a href="{{ url('/#work') }}">Work</a>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </div><!--nav-list-->
                    <small class="copyright">
                        Copyright©2019 Kyoritsu Computer & Communication Co.,Ltd. All Rights Reserved.
                    </small>
                </div><!--container-->
            </footer>
            {{-- ここまでフッターナビ --}}

        </div>
    </body>
</html>