@extends('contact.layout')

@section('content')
<!-- Page Content -->
<div class="container mt-5 p-lg-5">

  <section>
    <h1>{{ $subtitle }}</h1>
  </section>

  <section class="bg-light p-5">
    <form action="{{ url('/contact') }}" method="post" class="needs-validation" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <table class="table">
        <!--氏名-->
        <tr>
          <th scope="row">名字</th>
          <td>{{ $request->last_name }}</td>
        </tr>
        <tr>
          <th scope="row">名前</th>
          <td>{{ $request->first_name }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->last_name }}" />
        <input type="hidden" name="first_name" value="{{ $request->first_name }}" />
        <!--/氏名-->

        <!--Eメール-->
        <tr>
          <th scope="row">Eメール</th>
          <td>{{ $request->mail }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->mail }}" />
        <!--/Eメール-->

        <!--パスワード-->
        <tr>
          <th scope="row">Eメール</th>
          <td>{{ $request->password }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->password }}" />
        <!--/パスワード-->

        <!--住所-->
        <tr>
          <th scope="row">郵便番号(7桁)</th>
          <td>{{ $request->zip01 }}</td>
        </tr>
        <tr>
          <th scope="row">都道府県</th>
          <td>{{ $request->pref01 }}</td>
        </tr>
        <tr>
          <th scope="row">住所</th>
          <td>{{ $request->addr01 }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->zip01 }}" />
        <input type="hidden" name="last_name" value="{{ $request->pref01 }}" />
        <input type="hidden" name="last_name" value="{{ $request->addr01 }}" />
        <!--/住所-->

        <!--性別-->
        <tr>
          <th scope="row">性別</th>
          <td>{{ $request->gender }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->gender }}" />
        <!--/性別-->

        <!--スキル-->
        <?php $skill = implode("、", $request->skill); // チェックボックスからの配列を整形 
        ?>
        <tr>
          <th scope="row">スキル</th>
          <td>{{ $skill }}</td>
        </tr>
        <input type="hidden" name="skill" value="{{ $skill }}" />
        <!--/スキル-->

        <!---備考欄-->
        <tr>
          <th scope="row">備考欄</th>
          <td>{{ $request->remarks }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->remarks }}" />
        <!--/-備考欄-->

        <!--利用規約-->
        <tr>
          <th scope="row">利用規約</th>
          <td>{{ $request->terms }}</td>
        </tr>
        <input type="hidden" name="last_name" value="{{ $request->terms }}" />
        <!--/利用規約-->

      </table>

      <!--ボタンブロック-->
      <div class="form-group row">
        <div class="col-sm-12 text-center">
          <button type="button" class="btn btn-info" onClick="history.back()">戻る</button>
          <button type="submit" class="btn btn-info" disabled>送信 (※無効にしています)</button>
        </div>
      </div>
      <!--/ボタンブロック-->

    </form>
  </section>
</div><!-- /container -->
@endsection