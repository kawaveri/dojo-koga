@extends('layouts.app')

@section('title', 'CoderDojoとは？' . config('html_head.delimiter') . config('html_head.title'))

@section('content')
  <div class="container">
    <h1 class="mt-3">CoderDojoとは？</h1>
    <h2 class="mt-3">子どもたちのためのプログラミング道場</h2>
    <p>
      コーダー道場(CoderDojo)は、小中学生を中心とした子どもたちのためのプログラミング道場です。<br>
      CoderDojoは2011年アイルランドで生まれ、2012年4月に日本およびアジア初のDojoが東京 下北沢で開催されました。<br>
      2020年現在、110カ国で総Dojo数2,000以上、国内では200以上のDojoがあります。
      {{-- --}}
    </p>
    <p>
      道場は一般的なコンピュータ講座とは異なり、子どもたちが主体的・自発的にプログラミングを学ぶ場です。<br>
      大人は、メンターと呼ばれますが指導者ではなく助言者という立場で子どもたちと接します。
    </p>
  </div><!-- /.container -->
@endsection
