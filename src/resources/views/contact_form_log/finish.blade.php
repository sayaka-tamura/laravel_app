@extends('contact_form_log.layout')
@section('title', 'Laravel Tutorial (Contact Form)')

@section('content')
<section>
  <h1>{{ $subtitle }}</h1>
  <p>入力画面 -> 確認画面 -> <span class="badge badge-danger">完了画面</span></p>
</section>

<div class="alert alert-success" role="alert">データベースにデータを挿入しました！</div>
@endsection