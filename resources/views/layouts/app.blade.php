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
    <link rel="stylesheet" href="css/app.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="css/style.css">
@if (!(isset($error_page) && $error_page))
    <link rel="canonical" href="@yield('canonical_link', url()->current())">
    <link rel="shortcut icon" href="@yield('favicon_ico', config('html_head.favicon_ico'))">
    <link rel="icon" type="image/png" href="@yield('favicon_png', config('html_head.favicon_png'))">
    <link rel="apple-touch-icon" href="@yield('apple_touch_icon', asset(config('html_head.apple_touch_icon')))">
    <meta name="apple-mobile-web-app-title" content="@yield('app_title', config('html_head.app_title'))">
    <meta name="application-name" content="@yield('app_title', config('html_head.app_title'))">
    <meta property="og:title" content="@yield('title', config('html_head.og_title'))">
    <meta property="og:type" content="@yield('og_type', config('html_head.og_type'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset(config('html_head.og_image')))">
    <meta property="og:site_name" content="@yield('og_site_name', config('html_head.og_site_name'))">
    <meta property="og:description" content="@yield('description', config('html_head.description'))">
    <meta name="twitter:card" content="@yield('twitter_card', config('html_head.twitter_card'))">
    <meta name="twitter:site" content="@yield('twitter_site', config('html_head.twitter_site'))">
    <meta name="twitter:title" content="@yield('title', config('html_head.og_title'))">
    <meta name="twitter:description" content="@yield('description', config('html_head.description'))">
    <meta name="twitter:image" content="@yield('og_image', asset(config('html_head.og_image')))">
@endif
@stack('head-scripts')
  </head>
  <body class="html-body @yield('extra-body-class')">
    <div id="app">
      <div class="main-content-and-footer-wrapper">
        <div>
          @yield('jumbotron')
          <header class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-light bg-primary">
              <!-- ロゴ -->
              <a class="navbar-brand text-white" href="#">CoderDojo古河</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="ナビゲーションの切替">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-header">
                <!-- nav-item 左寄せ -->
                <!-- この下の行に mr-auto クラスを付与するだけ -->
                <ul class="navbar-nav mr-auto">　
                  <li class="nav-item"><a class="nav-link active text-white js-smooth-scroll" href="#header"><i class="fas fa-home mr-1"></i></i>TOP</a></li>
                  <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec01"><i class="fas fa-braille mr-1"></i>CoderDojo古河とは？</a></li>
                  <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec02"><i class="fas fa-comments mr-1"></i>コミュニティ</a></li>
                  <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec03"><i class="fab fa-servicestack mr-1"></i></i>プログラミング</a></li>
                  <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec04"><i class="fas fa-history mr-1"></i>STORY</a></li>
                  <li class="nav-item"><a class="nav-link text-white js-smooth-scroll" href="#sec05"><i class="fas fa-user mr-1"></i>PROFILE</a></li>
                </ul>
                <!-- nav-item 右寄せ -->
                <ul class="navbar-nav nav nav-pills">
                  <!--<li class="nav-item"><a class="nav-link active text-white" href="#"><i class="far fa-envelope mr-1"></i>お問い合わせ</a></li>-->
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
            <div class="text-white text-center" data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">
              Copyright(c) 2021 CoderDojo Koga All Rights Reserved. Design by <a href="https://laraweb.net/surrounding_knowledge/boostrap4/" target="_blank">https://laraweb.net</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です https://laraweb.net/surrounding_knowledge/boostrap4/ -->
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
        <script src="js/parallax.min.js"></script>
        <!-- スムーズスクロール部分の記述 -->
        <script src="js/smoothscroll.js"></script>

        <!--シェアボタン　各自「AddThis」にアクセスしてご自分のシェアボタンを作成してください。-->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d91a99854086150"></script>
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
