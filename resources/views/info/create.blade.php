@extends('layouts.app')

@section('content')
  <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
      <li><a href="{{ route('info.index') }}">お知らせ</a></li>
      <li class="is-active"><a href="#" aria-current="page">追加</a></li>
    </ul>
  </nav>

  <section>
    @include ('info.form', ['action'=>route('info.store'), 'method' => 'POST'])
  </section>
@endsection
