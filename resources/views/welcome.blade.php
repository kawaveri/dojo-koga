@extends('layouts.app')

@section('title', 'ホーム')

@section('jumbotron')
  <div class="home_header">
    <div class="home_overlay">
      <div class="container">
        <img class="logo" src="images/dojo.svg" alt="CoderDojo古河">
        <h1 class="display-4" data-anijs="if: scroll, on:window, do: bounce animated, before: scrollReveal">
          <nobr>CoderDojo<wbr>古河</nobr>
        </h1>
        <p class="lead" data-anijs="if: scroll, on:window, do: bounce animated, before: scrollReveal">
          <nobr>子どものための<wbr>プログラミング道場</nobr>
        </p>
        <!--<a class="btn btn-secondary btn-lg" href="https://laraweb.net/" target="_blank" role="button" data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">もっと学ぼう</a>-->
      </div>
    </div>
  </div>
@endsection

@section('content')
  <main>
    <!-- INFO -->
    <section id="sec-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-sm-12">
            <h2>お知らせ</h2>
            <p>
              現在最新のお知らせはありません。
            </p>
          </div>
          <div class="col-md-6 col-sm-12 text-center p-5">
            <div class="fb-page" data-href="https://www.facebook.com/coderdojokoga/" data-tabs="timeline"
                 data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true"
                 data-hide-cover="true" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/coderdojokoga/" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/coderdojokoga/">CoderDojo Koga（コーダー道場 古河）</a></blockquote>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>
    <!-- FACEBOOK SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v11.0&appId=2466653136967939&autoLogAppEvents=1"
            nonce="yCm8Bl7W"></script>
    <!-- // INFO -->

      <!-- VISION -->
      <section id="sec-vision">
          <div class="container text-center">
              <h2 class="mt-3" data-anijs="if: scroll, on:window, do: flipInX animated, before: scrollReveal">
                  CoderDojoとは？</h2>
              <p data-anijs="if: scroll, on:window, do: flipInY animated, before: scrollReveal">
                  世界中で開かれている、子どもたち向けのプログラミングクラブです。<br>
                  プログラミングを通じて、ものづくりの楽しさを手軽に楽しんでほしい。<br>
                  そんなおとなたちがボランティアで開催している、非営利のコミュニティです。
              </p>
          </div><!-- /.container -->
      </section>
      <!-- // VISION -->

      <!-- MESSAGE -->
    <section id="sec-message">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-sm-12"
               data-anijs="if: scroll, on:window, do: fadeInLeft animated, before: scrollReveal">
            <img class="img-fluid" src="images/sec02_01.jpg">
          </div>
          <div class="col-md-6 col-sm-12 p-5"
               data-anijs="if: scroll, on:window, do: fadeInRight animated, before: scrollReveal">
            <h2>プログラミングを自ら楽しむ</h2>
            <p>
              いわゆるパソコン教室や塾ではありません。<br>
              参加してくれた子供たちが、自らプログラミングを
              楽しんでくれる。そんなコミュニティを目指しています。<br>
              先生や講師はいませんが、
              メンターと呼ばれる人たちが一緒に悩んでくれるかもですw<br>
              プログラミングで楽しむことを、子どもたち自身で
              見つけてもらえると、うれしいです。
            </p>
          </div>
        </div>
        <div class="row flex-row-reverse">
          <div class="col-md-6 col-sm-12"
               data-anijs="if: scroll, on:window, do: fadeInRight animated, before: scrollReveal">
            <img class="img-fluid" src="images/sec02_02.jpg">
          </div>
          <div class="col-md-6 col-sm-12 p-5"
               data-anijs="if: scroll, on:window, do: fadeInLeft animated, before: scrollReveal">
            <h2>道場は世界中にあります</h2>
            <p>
              CoderDojo は7〜17歳を対象とした非営利のプログラミング道場です。<br>
              2011年にアイルランドで始まり、世界では112カ国・2,200の道場、日本には233以上の道場があります。
            </p>
          </div>
        </div>
      </div><!-- /.container -->
    </section>
    <!-- // MESSAGE -->

    <!-- MESSAGE -->
    <section id="sec-programming" data-anijs="if: scroll, on:window, do: fadeInUp animated, before: scrollReveal">
      <div class="container">
        <h2>プログラミング</h2>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="card mb-4">
              <img class="card-img-top" src="images/sec03_01.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Scratchではじめよう</h4>
                <p class="card-text">
                  はじめてのプログラミングは、まずScratchを使ってみると良いでしょう。<br>
                  ブロック遊びのように部品を組み立てるだけで、簡単に始めることができます。
                </p>
                <div class="text-center">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-scratch">
                    ＞ くわしく
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card mb-4">
              <img class="card-img-top" src="images/sec03_02.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">さわって遊ぼう</h4>
                <p class="card-text">
                  古河道場の特色として、Micro:bitやmBotなどを用いた体験型プログラミングに注力しています。<br>
                  PCの画面を飛び出して、実際に動かしたりしてみませんか。
                </p>
                <div class="text-center">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-robot">
                    ＞ くわしく
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card mb-4">
              <img class="card-img-top" src="images/sec03_03.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">プログラミングは自由だ！</h4>
                <p class="card-text">
                  Switchや3DS、マイクラのレッドストーン回路などプログラミングの題材は自由。<br>
                  お菓子のポッキーでもプログラミング出来るって、知ってました？
                </p>
                <div class="text-center">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-etc">
                    ＞ くわしく
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>
    <!-- // MESSAGE -->

    <!-- STORY -->
    <section class="mb-5" id="sec-inquiry" data-parallax="scroll" data-image-src="images/form_bg.jpg">
      <div class="container" data-anijs="if: scroll, on:window, do: fadeIn animated, before: scrollReveal">
        <h2 class="text-white">お申し込み・お問い合わせ</h2>
          <p>
              イベントへのお申し込み、およびCoderDojo古河へのお問い合わせは<a class="active" target="_blank" href="https://coderdojokoga.connpass.com/">connpass</a>からお願いいたします。
          </p>
          <p>
              <a class="active" target="_blank" href="https://coderdojokoga.connpass.com/"><img class="w-50" src="images/connpass_logo_2.png" alt="connpass"></a>
          </p>
      </div><!-- /.container -->
    </section>
    <!-- // STORY -->
  </main>
@endsection

@section('extra-content')
  <!-- モーダルメニュー -->
  <!-- Scratch -->
  <div class="modal fade" id="modal-scratch" tabindex="-1" role="dialog" aria-labelledby="modal-scratch-title"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-scratch-title">Scratchではじめよう</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="images/sec03_01.jpg" class="img-fluid" alt="Scratch">
          <p>
            はじめてプログラミングに触れるお子さまは、まずScratchを使ってみると良いでしょう。<br>
            ブロック遊びのように部品を組み立てるだけで、簡単に始めることができます。
          </p>
          <p>
            「Scratch（スクラッチ）」は、MITメディアラボというアメリカのマサチューセッツ工科大学内にある研究所で作られた、子ども向けのプログラミングソフトです。
          </p>
          <p>
            マウス操作で部品を組み合わせてプログラミングする「ビジュアルプログラミング言語」なので、キーボードを使う文字のタイピングに不慣れな子どもやパソコン初心者でも気軽にプログラミング学習に取り組むことができます。
          </p>
          <p>
            また、会員登録やインストールの必要がないので、ネット環境とパソコンやタブレットなどがあれば、誰でも無料で楽しめます。
          </p>
          <h5>参考リンク</h5>
          <div>
            <a class="active" target="_blank" href="https://scratch.mit.edu/">Scratch公式サイト</a>
          </div>
          <div class="text-center mb-4">
            <button type="button" class="btn btn-primary" data-dismiss="modal">とじる</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Robot -->
  <div class="modal fade" id="modal-robot" tabindex="-1" role="dialog" aria-labelledby="modal-robot-title"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-robot-title">さわって遊ぼう</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="images/sec03_02.jpg" class="img-fluid" alt="robot">
          <p>
            古河道場の特色として、Micro:bitやmBotなどのハードウェアを用いた体験型プログラミングに注力しています。
          </p>
          <p>
            古河道場では小型マイコンボードの<a href="https://makecode.microbit.org/?lang=ja"
                               target="_blank">Micro:bit</a>やプログラミングロボットの<a
                    href="https://www.makeblock.com/steam-kits/mbot" target="_blank">mBot</a>を複数台有しておりますので希望者には貸与しております。
          </p>
          <p>
            また、2021年7月に<a href="https://www.jaycee.or.jp/" target="_blank">公益社団法人日本青年会議所さま</a>からロボットプログラミングキット5台を寄贈して頂きました。
          </p>
          <p>
            さあ、PCの画面を飛び出して、実際にロボットをさわったり動かしたりしてみませんか。
          </p>
          <h5>参考リンク</h5>
          <div>
            <a class="active" href="https://makecode.microbit.org/?lang=ja" target="_blank">Micro:bit公式サイト</a>
          </div>
          <div>
            <a class="active" href="https://www.makeblock.com/steam-kits/mbot" target="_blank">mBot公式サイト</a>
          </div>
          <div class="text-center mb-4">
            <button type="button" class="btn btn-primary" data-dismiss="modal">とじる</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ETC -->
  <div class="modal fade" id="modal-etc" tabindex="-1" role="dialog" aria-labelledby="modal-etc-title"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-etc-title">プログラミングは自由だ！</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="images/sec03_03.jpg" class="img-fluid" alt="プログラミングは自由だ！">
          <p>
            「プログラミング」に関することであれば、題材は何でもＯＫ。
          </p>
          <p>
            マインクラフトのレッドストーン回路で装置プログラミングに挑むニンジャもいれば、Scratchでの作曲やアニメーション作成に没頭するニンジャもいます。
          </p>
          <p>
            携帯ゲーム機の<a href="http://smilebasic.com/" target="_blank">3DSでも本格的なプログラミングができる</a>なんて、ご存知でしたか？
          </p>
          <p>
            最近ではSwitchの「<a href="https://www.nintendo.co.jp/switch/awuxa/" target="_blank">ナビつき！ つくってわかる
              はじめてゲームプログラミング</a>」が大きな話題になりましたね。
          </p>
          <p>
            中にはグリコのポッキーでプログラミングができる<a href="https://cp.glico.jp/glicode/" target="_blank">GLICODE®（グリコ―ド）</a>なんて変わり種もありますw
          </p>
          <p>
            正解がありそうでないのがプログラミング。自由な環境と自由な発想で、自由なプログラミングを一緒に楽しみましょう。
          </p>
          <p>
            もちろんPythonやC#などの本格的なコーディング言語も大歓迎ですよ！現役職業プログラマーのメンターがサポートします。
          </p>
          <div class="text-center mb-4">
            <button type="button" class="btn btn-primary" data-dismiss="modal">とじる</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
