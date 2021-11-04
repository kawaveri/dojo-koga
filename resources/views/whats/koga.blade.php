@extends('layouts.app')

@section('title', 'CoderDojoとは？' . config('html_head.delimiter') . config('html_head.title'))

@section('content')
  <div class="container">
    <h1 class="mt-3">CoderDojo古河とは？</h1>
    <p>
      「CoderDojo Koga（コーダー道場 古河）」は、参加費無料の子どもたちのためのプログラミングクラブです。<br>
      茨城県古河市を中心に、2018年7月より毎月定期的に開催しています。
    </p>
    <p>
      CoderDojoの活動については、<a href="{{ route('whats.index') }}">こちらの紹介ページ</a>もご覧ください。
    </p>

    <h2 class="mt-3">活動場所</h2>
    <p>
    </p>

    <h2 class="mt-3">メンター紹介</h2>
    <div class="card-columns">
      <div class="card mb-4">
        <img class="card-img-top mx-auto" src="{{ asset('/images/dojo.jpg') }}" alt="あったかい">
        <div class="card-body">
          <h4 class="card-title">あったかい</h4>
          <span class="badge badge-primary">チャンピオン</span>
          <p class="card-text">
          </p>
        </div>
        <div class="card-footer">
          &nbsp;
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top mx-auto" src="{{ asset('/images/prof_kawaveri.png') }}" alt="カワヴェリ">
        <div class="card-body">
          <h4 class="card-title">カワヴェリ</h4>
          <span class="badge badge-primary">メンター</span>
          <span class="badge badge-success">Java</span>
          <span class="badge badge-success">PHP</span>
          <span class="badge badge-success">C#</span>
          <span class="badge badge-success">VB.net</span>
          <span class="badge badge-success">SQL</span>
          <span class="badge badge-success">android</span>
          <span class="badge badge-success">Unity</span>
          <span class="badge badge-warning">作曲</span>
          <span class="badge badge-warning">コント</span>
          <span class="badge badge-warning">マラソン</span>
          <p class="card-text">
            今から40年ぐらい前、小学校3年生の時にプログラミングを始めました。<br>
            現在は電子書籍や動画サービス、スマホアプリを作るお仕事をしてます。<br>
            何でも作れて暮らしが楽しくなるプログラミングの面白さを、みんなに知ってもらいたいです！
          </p>
        </div>
        <div class="card-footer">
          <a href="https://twitter.com/Kawaveri" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/Kawaveri" target="_blank">
            <i class="fab fa-facebook"></i>
          </a>
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top mx-auto" src="{{ asset('/images/dojo.jpg') }}" alt="たのすけ">
        <div class="card-body">
          <h4 class="card-title">たのすけ</h4>
          <span class="badge badge-primary">メンター</span>
          <p class="card-text">
          </p>
        </div>
        <div class="card-footer">
          &nbsp;
        </div>
      </div>
      <div class="card mb-4">
        <img class="card-img-top mx-auto" src="{{ asset('/images/dojo.jpg') }}" alt="ちゃんなか">
        <div class="card-body">
          <h4 class="card-title">ちゃんなか</h4>
          <span class="badge badge-primary">メンター</span>
          <p class="card-text">
          </p>
        </div>
        <div class="card-footer">
          &nbsp;
        </div>
      </div>
    </div><!-- /.container -->

    <h2 class="mt-3">CoderDojo Kogaロゴについて</h2>
    <p>
    </p>

    <h2 class="mt-3">ポスターを作っていただきました！</h2>
    <p>
    </p>

    <h2 class="mt-3">ロボットキットを寄贈して頂きました！</h2>
    <p>
    </p>

  </div><!-- /.container -->
@endsection
