@extends('contact_form_log.layout')
@section('title', 'Laravel Tutorial (Contact Form)')

@section('content')
<!-- Page Content -->
<div class="container mt-5 p-lg-5">
  <section>
    <h1>{{ $subtitle }}</h1>
    <p><span class="badge badge-danger">入力画面</span> -> 確認画面 -> 完了画面</p>
  </section>

  <section class="bg-light p-5">
    <form action="{{ url('/contactform_log/confirm') }}" method="post" class="needs-validation" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!--件名-->
      <!-- Validation Error Ref: https://eza-s.com/blog/archives/222/-->
      <div class="form-group row">
        <label for="subject" class="col-sm-2 col-form-label">件名</label>
        <div class="col-sm-10">
          <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @if($errors->has('subject')) is-invalid @endif" id="subject" placeholder="テスト" required>
          @if($errors->has('subject'))
          <div class="invalid-feedback">{{ $errors->first('subject') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>

      </div>
      <!--/件名-->
      <!--/E-mail-->
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="mail" value="{{ old('mail') }}" class="form-control @if($errors->has('mail')) is-invalid @endif" id="inputEmail" placeholder="名前" required>
          @if($errors->has('mail'))
          <div class="invalid-feedback">{{ $errors->first('mail') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/E-mail-->

      <!--備考欄-->
      <div class="form-group row">
        <label for="Textarea" class="col-sm-2 col-form-label">内容</label>
        <div class="col-sm-10">
          <textarea name="remarks" class="form-control @if($errors->has('remarks')) is-invalid @endif" id="Textarea" rows="3" placeholder="その他、質問などありましたら" required>{{ old('remarks') }}</textarea>
          @if($errors->has('remarks'))
          <div class="invalid-feedback">{{ $errors->first('remarks') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/備考欄-->

      <!--ボタンブロック-->
      <div class="form-group row">
        <div class="col-sm-4 mx-auto">
          <button type="submit" class="btn btn-info btn-block">確認</button>
        </div>
      </div>
      <!--/ボタンブロック-->

    </form>
  </section>

</div><!-- /container -->
@endsection