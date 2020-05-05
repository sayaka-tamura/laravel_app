@extends('contact.layout')

@section('content')
<!-- Page Content -->
<div class="container mt-5 p-lg-5">
  <section>
    <h1>{{ $subtitle }}</h1>
  </section>

  <section class="bg-light p-5">
    <form action="{{ url('/contact') }}" method="post" class="needs-validation" novalidate>
      {{ method_field('patch') }}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!--氏名-->
      <div class="form-row mb-4">
        <div class="col-md-6">
          <label for="lastName">名字</label>
          <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @if($errors->has('last_name')) is-invalid @endif" id="lastName" placeholder="名字" required>
          @if($errors->has('last_name'))
          <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
        <div class="col-md-6 mb-3">
          <label for="firstName">名前</label>
          <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @if($errors->has('first_name')) is-invalid @endif" id="firstName" placeholder="名前" required>
          @if($errors->has('first_name'))
          <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/氏名-->

      <!--Eメール-->
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
        <div class="col-sm-10">
          <input type="text" name="mail" value="{{ old('mail') }}" class="form-control @if($errors->has('mail')) is-invalid @endif" id="inputEmail" placeholder="Eメール" required>
          @if($errors->has('mail'))
          <div class="invalid-feedback">{{ $errors->first('mail') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/Eメール-->

      <!--パスワード-->
      <div class="form-group row mb-5">
        <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
        <div class="col-sm-10">
          <input type="password" name="password" value="{{ old('password') }}" class="form-control @if($errors->has('password')) is-invalid @endif" id="inputPassword" placeholder="パスワード" required>
          @if($errors->has('password'))
          <div class="invalid-feedback">{{ $errors->first('password') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
          <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
        </div>
      </div>
      <!--/パスワード-->

      <!--住所-->
      <div class="form-row">
        <div class="col-md-3 mb-5">
          <label for="inputAddress01">郵便番号(7桁)</label>
          <input type="text" name="zip01" value="{{ old('zip01') }}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" class="form-control @if($errors->has('zip01')) is-invalid @endif" id="inputAddress01" placeholder="1030013" required>
          @if($errors->has('zip01'))
          <div class="invalid-feedback">{{ $errors->first('zip01') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
        <div class="col-md-3">
          <label for="inputAddress02">都道府県</label>
          <input type="text" name="pref01" value="{{ old('pref01') }}" id="inputAddress02" class="form-control @if($errors->has('pref01')) is-invalid @endif" placeholder="東京都" required>
          @if($errors->has('pref01'))
          <div class="invalid-feedback">{{ $errors->first('pref01') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
        <div class="col-md-6">
          <label for="inputAddress03">住所</label>
          <input type="text" name="addr01" value="{{ old('addr01') }}" class="form-control @if($errors->has('addr01')) is-invalid @endif" id="inputAddress03" placeholder="中央区日本橋人形町" required>
          @if($errors->has('addr01'))
          <div class="invalid-feedback">{{ $errors->first('addr01') }}</div>
          @else
          <div class="invalid-feedback">必須項目です</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/住所-->

      <!--性別-->
      <div class="form-group">
        <div class="row mb-4">
          <legend class="col-form-label col-sm-2">性別</legend>
          <div class="col-sm-10">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="gender" value="女性" id="customRadioInline1" class="custom-control-input" @if( old('gender')=='女性' ) checked="checked" @endif required>
              <label class="custom-control-label" for="customRadioInline1">女性</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" name="gender" value="男性" id="customRadioInline2" class="custom-control-input" @if( old('gender')=='男性' ) checked="checked" @endif>
              <label class="custom-control-label" for="customRadioInline2">男性</label>
            </div>
          </div>
        </div>
      </div>
      <!--/性別-->

      <!--スキル-->
      <div class="form-group row">
        <div class="col-sm-2">スキル</div>
        <div class="col-sm-10">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" name="skill[]" value="PHP／Laravel" {{ is_array(old("skill")) && in_array("PHP／Laravel", old("skill"), true)? 'checked="checked"' : '' }} class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">PHP／Laravel</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" name="skill[]" value="Ruby on Rails" {{ is_array(old("skill")) && in_array("Ruby on Rails", old("skill"), true)? 'checked="checked"' : '' }} class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">Ruby on Rails</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" name="skill[]" value="Vue.js" {{ is_array(old("skill")) && in_array("Vue.js", old("skill"), true)? 'checked="checked"' : '' }} class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3">Vue.js</label>
          </div>
          @if($errors->has('skill'))
          <div class="text-danger">最低一つはチェックをしてください</div>
          @endif
        </div>
      </div>
      <!--/スキル-->

      <!--備考欄-->
      <div class="form-group pb-3">
        <label for="Textarea">備考欄</label>
        <textarea name="remarks" class="form-control @if($errors->has('remarks')) is-invalid @endif" id="Textarea" rows="3" placeholder="その他、質問などありましたら" required>{{ old('remarks') }}</textarea>
        @if($errors->has('remarks'))
        <div class="invalid-feedback">{{ $errors->first('remarks') }}</div>
        @else
        <div class="invalid-feedback">必須項目です</div>
        <!--HTMLバリデーション-->
        @endif
      </div>
      <!--/備考欄-->

      <!--利用規約-->
      <div class="form-group pb-3">
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input @if($errors->has('terms')) is-invalid @endif" type="checkbox" name="terms" value="利用規約に同意します" id="invalidCheck" required>
          <label class="custom-control-label" for="invalidCheck">
            利用規約に同意する
          </label>
          @if($errors->has('remarks'))
          <div class="invalid-feedback mb-3">{{ $errors->first('terms') }}</div>
          @else
          <div class="invalid-feedback mb-3">提出する前に同意する必要があります</div>
          <!--HTMLバリデーション-->
          @endif
        </div>
      </div>
      <!--/利用規約-->

      <!--ボタンブロック-->
      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-info btn-block">確認</button>
        </div>
      </div>
      <!--/ボタンブロック-->

    </form>
  </section>

</div><!-- /container -->
@endsection