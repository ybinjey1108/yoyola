@extends('layouts.product')
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- 回上方 -->
    <script type="text/javascript">
    $('a.top').click(function (e) { 
     e.preventDefault();
    $(document.body).animate({scrollTop: 0}, 800);
    });
    </script>
<!-- 回上方 -->
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
    <div class="product1 overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style ="background-color:gray;">
      <img src="../image/a-1.jpg" class="img-fluid img-thumbnail" >
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">instax mini70</h1>
        <p class="lead font-weight-normal">Taking a few retro style happy snaps with friends and family couldn't be easier with the Instax Mini 70! Fun and simple to operate, simply point and click for instant print photos on multi-coloured film sheets - giving your fridge instant style. Featuring a built-in flash, viewfinder, selfie mode, selfie mirror for correct framing, self-timer, hi-key mode for bright skin tones and, as always, picture perfect photos printed instantly every time.</p>
        <a class="btn btn-outline-secondary" href="/">Buy it</a>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">iPhone SE</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 380px; border-radius: 21px 21px 0 0;">
          <img src="../image/iphone.jpg" class="img-fluid img-thumbnail"  style="width: 100%; height: 300px;" >
          <a class=" btn btn-outline-secondary" href="/" style="margin-top: 20px;">Buy it</a>
        </div>
      </div>
      
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">iPhone X</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 380px; border-radius: 21px 21px 0 0;">
          <img src="../image/xr.jpg" class="img-fluid img-thumbnail">
          <a class="btn btn-outline-secondary" href="/" style="margin-top: 20px;">Buy it</a>
        </div>
      </div>
    </div>
	<a class="top" href="">Back to top</a>
<!-- 主選單 -->


