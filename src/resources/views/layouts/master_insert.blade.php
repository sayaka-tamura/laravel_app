<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('styles')
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"><!-- FontAwesome -->

</head>

<body>

  <!--=================================================
Navbar
==================================================-->

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
      <div class="navbar-header">
        <!-- タイトルなどのテキスト -->
        <a class="navbar-brand" href="#">@yield('title')</a>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-top: 40px;">
    @yield('content')
  </div><!-- /.container -->

  <footer class="footer">
    <div class="container">
      <p class="text-muted">@yield('title')</p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Scripts（Jquery） -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->

</body>

</html>