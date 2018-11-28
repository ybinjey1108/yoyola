@extends('layouts.product')
<!-- 主選單 -->
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="{{ url('/yoyola') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/yoyola/Product?good_id=1') }}">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="/">Cart</a>
    @if(session('member_id') > 0)
        <a class="py-2 d-none d-md-inline-block text-white" ><?echo "會員：". session('name') ?></a>
        <a class="py-2 d-none d-md-inline-block" href="/">Member</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/yoyola/logout') }}">Logout</a> 
    @else 
        
        <a class="py-2 d-none d-md-inline-block" href="{{ url('/yoyola/login') }}">Login</a>
    @endif
        <a class="py-2 d-none d-md-inline-block" href="/">Support</a>

      </div>
</nav>
<!-- 主選單 -->
<!-- 資料表單 --> 
    <h1>－－－會員註冊－－－</h1>
    @if ($errors->has('account'))
    <strong>"{{ $errors->first('account') }}"</strong>
    @endif
    <form action="{{ url('yoyola/sign') }}" method="post" style=font-size:30px  >
        {{ csrf_field() }}
        Email：<input id="check" type="text" style=font-size:30px name="email" value="" placeholder="輸入email"><br>
        @if ($errors->has('email'))
            <strong style="color:#FF30FF">"{{ $errors->first('email') }}"</strong><br>
        @endif
        密碼：<input type="password" style=font-size:30px name="password" value="" placeholder="輸入密碼"> <br>
        再次輸入密碼：<input type="password" style=font-size:30px name="password_confirmation" value="" placeholder="輸入密碼"> <br>
        @if ($errors->has('password'))
        <strong style="color:#FF30FF">"{{ $errors->first('password') }}"</strong><br>
        @endif
        會員名稱：<input type="text" style=font-size:30px name="name" value="" placeholder="輸入會員名稱"> <br>
        會員電話：<input type="text" style=font-size:30px name="phone" value="" placeholder="輸入電話"><br>
        <input type="submit" name="" value="註冊">
    </form>
  <!-- 資料表單 -->
    <a href="{{ url('yoyola/login') }}">登入</a>
