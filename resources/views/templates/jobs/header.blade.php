<!DOCTYPE html>
<html>
<head>
	<title>{{ $title or 'Tuyển dụng, tìm việc' }}</title>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="{{$PublicUrl}}/img/unnamed.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{$PublicUrl}}/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('jobs.index') }}">YOUR-WORK</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('*job*')?'active':''}}"><a href="{{ route('jobs.job') }}">Công việc</a></li>
            <li class="{{ Request::is('*company*')?'active':''}}" ><a href="{{ route('jobs.company') }}">Công ty</a></li>
            <li class="{{ Request::is('*contact*')?'active':''}}"><a href="{{ route('jobs.contact') }}">Liên hệ</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
          @if(!Auth::check())
             <li><a href="{{route('auth.candidatelogin')}}" class="btn btn-warning">Ứng viên</a></li>
             <li><a href="{{route('auth.companylogin')}}" class="btn btn-primary">Công ty</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{$PublicUrl}}/img/slide2.jpg" class="img-circle" alt="Cinque Terre" width="25" height="25"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('admin.index.index')}}">Tài khoản</a></li>
                <li><a href="#"><span  class="btn btn-warning btn-block">Hồ sơ</span></a></li>
                <li><a href="#">Công việc<span class="badge pull-right">3</span></a></li>
                <li><a href="#">Liên hệ<span class="badge pull-right">3</span></a></li>
                <li><a href="#">Bình luận<span class="badge pull-right">3</span></a></li>
              </ul>
            </li>
            <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
         @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>