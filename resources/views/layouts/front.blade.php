<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ ('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ ('css/app.css') }}" rel="stylesheet">
        <link href="{{ ('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar_under">
                <div class="container d-flex justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ ('img/logo_acots.png') }}" alt="logo">
                    </a>
                    <div class="nav-list d-flex justify-content-between">
                        <a href="/#about">About</a>
                        <a href="/#skill">Skill</a>
                        <a href="/#work">Work</a>
                        <a href="/contact">Contact</a>
                    </div><!--nav-list-->
                </div><!--container-->
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            
            {{-- フッターナビ --}}
            <footer>
                <div class="container d-flex justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ ('img/logo_acots.png') }}" alt="logo">
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