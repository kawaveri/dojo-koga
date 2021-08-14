@extends('layouts.app')

@section('title', $info->title . config('html_head.delimiter') . 'お知らせ' . config('html_head.delimiter') . config('html_head.title'))

@section('content')
  <div class="container">
    <main>
      <section class="section">
        <h1 class="mt-3">お知らせ</h1>
        <h2 class="title">{{ $info->title }}</h2>
        <p>{{ $info->open_at->format('Y.n.j') }}</p>
        <div>
          {!! nl2br($info->body) !!}
        </div>
      </section>
    </main>
    <nav class="section has-text-centered">
      <a class="button is-primary is-rounded is-wide" href="{{ route('info.index') }}">お知らせ一覧に戻る</a>
      <hr>
    </nav>
  </div>
@endsection
