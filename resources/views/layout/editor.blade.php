<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="{{ Auth::user()->name }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap-4.1.3/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/blog.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>

  <body>

    @include('layout.nav')
    <div class="container">
      <div class="blog-header"></div>
      <div class="row">
        @yield('content')
      </div>
    </div><!-- /.container -->
    @include('layout.footer')

    <!---------------- Bootstrap core JavaScript ---------------->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/js/libs/jquery-3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/libs/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/NKeditor5.0.3.2/NKeditor-all-min.js"></script>
    <script type="text/javascript" src="/js/NKeditor5.0.3.2/lang/zh-CN.js"></script>
    <script type="text/javascript" src="/js/myEditor.js"></script>

  </body>
</html>