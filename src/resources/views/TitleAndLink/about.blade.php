@extends('TitleAndLink.layout')

@section('content')
<h1>サンプルページ</h1>
<p>これはサンプルページです。</p>
<p><a href="{{url('/simpleForm/helo')}}">これは helo ページへのリンクです</a></p>
@endsection