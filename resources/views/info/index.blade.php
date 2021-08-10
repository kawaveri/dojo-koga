@extends('layouts.app')

@section('title', 'お知らせ' . config('html_head.delimiter') . config('html_head.title'))

@section('content')
  <div class="container">
    <h1 class="mt-3">お知らせ</h1>
    <ul class="link-list">
      @forelse($infos as $info)
        <li>
          <a href="{{ route('info.show', ['info'=>$info->id]) }}">
            {{ optional($info->open_at)->format('［Y.n.j］') }}{{ $info->title }}
          </a>
        </li>
      @empty
        <li>
          現在最新のお知らせはありません。
        </li>
      @endforelse
    </ul>
  </div><!-- /.container -->
@endsection
