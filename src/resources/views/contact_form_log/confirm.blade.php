@extends('contact_form_log.layout')
@section('title', 'Laravel Tutorial (Contact Form)')

@section('content')
<!-- Page Content -->
<div class="container mt-5 p-lg-5">

  <section>
    <h1>{{ $subtitle }}</h1>
    <p>入力画面 -> <span class="badge badge-danger">確認画面</span> -> 完了画面</p>
  </section>

  <section class="bg-light p-5">
    <form action="{{ url('/contactform_log/finish') }}" method="post" class="needs-validation" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <table class="table">
        <!--氏名-->
        <tr>
          <th scope="row">件名</th>
          <td>{{ $request->subject }}</td>
        </tr>
        <input type="hidden" name="subject" value="{{ $request->subject }}" />
        <!--/氏名-->

        <!--Eメール-->
        <tr>
          <th scope="row">Eメール</th>
          <td>{{ $request->mail }}</td>
        </tr>
        <input type="hidden" name="mail" value="{{ $request->mail }}" />
        <!--/Eメール-->

        <!---備考欄-->
        <tr>
          <th scope="row">内容</th>
          <td>{{ $request->remarks }}</td>
        </tr>
        <input type="hidden" name="remarks" value="{{ $request->remarks }}" />
        <!--/-備考欄-->

      </table>

      <!--ボタンブロック-->
      <div class="form-group row">
        <div class="col-sm-12 text-center">
          <button type="button" class="btn btn-info" onClick="history.back()">戻る</button>
          <input type="submit" class="btn btn-primary btn-wide" name="button1" value="登録"/>
        </div>
      </div>
      <!--/ボタンブロック-->

    </form>
  </section>
</div><!-- /container -->
@endsection