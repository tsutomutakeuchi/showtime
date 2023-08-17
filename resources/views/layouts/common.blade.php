<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <ul class="global-navi">
                    <li><a class="nav-item" href="{{ url('/stats_by_year') }}">トップ</a></li>
                    <li><a class="nav-item" href="{{ url('/stats_by_year') }}">年度別成績</a></li>
                    <li><a class="nav-item" href="{{ url('/stats_by_year') }}">主要項目の成績予測</a></li>
                </ul>
            </nav>
        </header>
            
        <div class="main-container">
            @yield('content')
        </div>
            
        <div class="right-side-contents">
        </div>
    </body>
</html>