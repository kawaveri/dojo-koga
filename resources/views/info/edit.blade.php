@extends('layouts.app')

@section('content')
  <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
      <li><a href="{{ route('info.index') }}">お知らせ</a></li>
      <li><a href="{{ route('info.show', [$info->id]) }}">{{ $info->title }}</a></li>
      <li class="is-active"><a href="#" aria-current="page">編集</a></li>
    </ul>
  </nav>

  <section>
    @include ('info.form', ['action'=>route('info.update',[$info->id]), 'method' => 'PATCH'])
  </section>
@endsection
