@extends('layouts.login')
<html>
	<head>
		<title>	yoyo.com 登入</title>
	</head>

	<body class="text-center">
		<form class="form-signin" action="{{ url('yoyola/login') }}" method="post">
            {{ csrf_field() }}

            @if ($errors->has('fail'))
                <div class="fail" style="color:#FF30FF" >{{ $errors->first('fail') }}</div>
            @endif

			<a href="{{ url('yoyola/sign') }}">還沒註冊嗎?</a>
      		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
     		<input type="text" name="email" value="" class="form-control" placeholder="輸入帳號">
      		<input type="password" name="password" value="" class="form-control" placeholder="Password">
      		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      		<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    	</form>
	</body>
</html>