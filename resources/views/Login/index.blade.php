<form class="form-signin" action="/login" method="post">
	{{ csrf_field()}}
        <a href="http://localhost/yoyo/member/member_signjq.php">還沒註冊嗎?</a>
	<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
     	<input type="text" name="account" value="" class="form-control" placeholder="輸入帳號">
	<input type="password" name="password" value="" class="form-control" placeholder="Password">
      	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>