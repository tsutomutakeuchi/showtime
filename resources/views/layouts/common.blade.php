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
        <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                    
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav" id="navbarToggleExternalContent">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/stats_by_year') }}">トップ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/stats_by_year') }}">年度別成績</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/stats_by_year') }}">主要項目の成績予測</a></li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </header>
        
        <div class="container">
            <div class="row">    
                <div class="main col-md-9">
                    @yield('content')
                </div>
                    
                <div class="right-side-contents col-md-3 border-start">
                    <h3>過去の試合成績</h3>
                    <ul>
                        <li>2023年8月17日</li>
                        <li>2023年8月16日</li>
                        <li>2023年8月15日</li>
                        <li>2023年8月13日</li>
                        <li>2023年8月12日</li>
                        <li>2023年8月11日</li>
                        <li>2023年8月10日</li>
                        <li>2023年8月19日</li>
                    </ul>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>