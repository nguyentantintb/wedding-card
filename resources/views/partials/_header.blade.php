<!--Header Start -->
<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="index-2.html" class="logo pull-left"><img src="/img/logo.png" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="{{ url('/') }}">TRANG CHỦ</a>
                  </li>
                  {{-- <li><a class="myaccount" href="#">My Account</a> --}}
                  {{-- </li> --}}
                  <li><a class="shoppingcart" href="{{ url('shopping-cart') }}">GIỎ HÀNG</a>
                  </li>
                  <li><a class="checkout" href="#">ĐẶT HÀNG</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="categorymenu">
      <nav class="subnav">
        <ul class="nav-pills categorymenu">
          <li><a class="active"  href="{{ url('/') }}">TRANG CHỦ</a></li>
        </li>
        <li><a  href="#">LOẠI THIỆP </a>
          <?php $categories = DB::table('categories')->get(); ?>
          <div>
            <ul>
             @foreach ($categories as $category)
             <li><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></li>
             @endforeach
           </ul>        
         </div>
       </li>
       <li><a href="{{ url('shopping-cart') }}">GIỎ HÀNG</a></li>
       <li><a href="#">ĐẶT HÀNG</a></li>
       <li><a href="#">TÀI KHOẢN</a>
        <div>
          <ul>
            @if(Auth::check())
            <li><a href="#">My Account</a></li>
            <li><a href="{{ url('auth/logout') }}">ĐĂNG XUẤT</a></li>
            @else
            <li><a href="{{ url('auth/login') }}">ĐĂNG NHẬP</a></li>
            <li><a href="{{ url('auth/register') }}">ĐĂNG KÝ</a></li>
            @endif
          </ul>
        </div>
      </li>
      <li><a href="{{ url('contact') }}">LIÊN HỆ</a></li>
    </ul>
  </nav>
</div>
</div>
</header>
<!-- Header End