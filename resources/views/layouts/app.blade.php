<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') CoderDojo古河</title>
    <meta name="description" content="@yield('description', config('html_head.description'))">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@800&amp;display=swap" rel="stylesheet">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @if (!(isset($error_page) && $error_page))
        <link rel="canonical" href="@yield('canonical_link', url()->current())">
        {{--    <link rel="shortcut icon" href="@yield('favicon_ico', config('html_head.favicon_ico'))">--}}
        {{--    <link rel="icon" type="image/png" href="@yield('favicon_png', config('html_head.favicon_png'))">--}}
        <link href='images/apple-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
        <link href='images/apple-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
        <link href='images/apple-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
        <link href='images/apple-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
        <link href='images/apple-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
        <link href='images/apple-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
        <link href='images/apple-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
        <link href='images/apple-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
        <link href='images/apple-icon-180x180.png' rel='apple-touch-icon' sizes='180x180'>
        <link href='images/android-icon-192x192.png' rel='icon' sizes='192x192' type='image/png'>
        <link href='images/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
        <link href='images/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
        <link href='images/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
        {{--    <link rel="apple-touch-icon" href="@yield('apple_touch_icon', asset(config('html_head.apple_touch_icon')))">--}}
        <meta name="apple-mobile-web-app-title" content="@yield('app_title', config('html_head.app_title'))">
        <meta name="application-name" content="@yield('app_title', config('html_head.app_title'))">

        <meta content='CoderDojo古河 - 子どものためのプログラミング道場' property='og:title'>
        <meta content='https://coderdojo-koga.hyasynth.com/' property='og:url'>
        <meta content='CoderDojoとは、世界中で開かれている子どもたち向けの非営利のプログラミングクラブです。古河道場は茨城県古河市を中心に開催しております。' name='description'>
        <meta content='CoderDojoとは、世界中で開かれている子どもたち向けの非営利のプログラミングクラブです。古河道場は茨城県古河市を中心に開催しております。'
              property='og:description'>
        <meta content='website' property='og:type'>
        <meta content='https://coderdojo-koga.hyasynth.com/images/dojo_ogp.png' property='og:image'>
        <meta content='image/png' property='og:image:type'>
        <meta content='CoderDojo古河' property='og:site_name'>
        <meta content='summary_large_image' name='twitter:card'>
        <meta content='@Kawaveri' name='twitter:site'>
        <meta content='@Kawaveri' name='twitter:creator'>
        <meta content='CoderDojo古河 - 子どものためのプログラミング道場' name='twitter:title'>
        <meta content='CoderDojoとは、世界中で開かれている子どもたち向けの非営利のプログラミングクラブです。古河道場は茨城県古河市を中心に開催しております。'
              name='twitter:description'>
        <meta content='https://coderdojo-koga.hyasynth.com/images/dojo_ogp.png' name='twitter:image'>
        <meta content='https://coderdojo-koga.hyasynth.com/' name='twitter:url'>
    @endif
    @stack('head-scripts')
</head>
<body class="html-body @yield('extra-body-class')">
<div id="app">
    <div class="main-content-and-footer-wrapper">
        <div>
            @yield('welcome')
            <header class="sticky-top">
                <nav class="navbar navbar-expand-md navbar-light bg-primary">
                    <!-- ロゴ -->
                    <a class="navbar-brand text-white" href="{{ route('home') }}">CoderDojo古河</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header"
                            aria-controls="navbar-header" aria-expanded="false" aria-label="ナビゲーションの切替">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-header">
                        <!-- nav-item 左寄せ -->
                        <!-- この下の行に mr-auto クラスを付与するだけ -->
                        <ul class="navbar-nav mr-auto">　
                            <li class="nav-item"><a class="nav-link text-white" href="{{ route('info.index') }}"><i
                                            class="fas fa-comments mr-1"></i>お知らせ</a></li>
                            @yield('extra-navi')
                        </ul>
                        <!-- nav-item 右寄せ -->
                        <ul class="navbar-nav nav nav-pills">
                            @auth
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="far fa-envelope mr-1"></i>{{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('content')
            @yield('extra-content')
        </div>
        <!-- フッタ -->
        <footer class="footer">
            <div class="container mb-0">
                <div class="text-white text-center"
                     data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">
                    Copyright(c) 2021 CoderDojo Koga All Rights Reserved. Design by <a
                            href="https://laraweb.net/surrounding_knowledge/boostrap4/" target="_blank">https://laraweb.net</a>
                    <!-- ←クレジット表記を外す場合はシリアルキーが必要です https://laraweb.net/surrounding_knowledge/boostrap4/ -->
                </div>
            </div><!-- /.container -->
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- AniJS core library -->
        <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>
        <!-- ScrollReveal Helper-->
        <script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
        <!-- Parallax library -->
        <script src="{{ asset('/js/parallax.min.js') }}"></script>
        <!-- スムーズスクロール部分の記述 -->
        <script src="{{ asset('/js/smoothscroll.js') }}"></script>

        <!--シェアボタン　各自「AddThis」にアクセスしてご自分のシェアボタンを作成してください。-->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript"
                src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61113319775fb0eb"></script>
        <script>
            // iPad だけ.wrapの高さを変更する
            $(function () {
                var ua = navigator.userAgent;
                if (ua.indexOf('iPad') > 0) {
                    $(".wrap").addClass("height-changed");
                }
            })
        </script>
    </div>
</div>
@stack('bottom-scripts')
</body>
</html>
