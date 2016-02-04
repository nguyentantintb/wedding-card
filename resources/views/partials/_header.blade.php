<!-- Header Start -->
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
                  <li><a class="home active" href="#">Home</a>
                  </li>
                  <li><a class="myaccount" href="#">My Account</a>
                  </li>
                  <li><a class="shoppingcart" href="#">Shopping Cart</a>
                  </li>
                  <li><a class="checkout" href="#">CheckOut</a>
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
          <li><a class="active"  href="index-2.html">Home</a>
            <div>
              <ul>
                <li><a href="index2.html">Home Style 2</a></li>
              </ul>
            </div>
          </li>
        </li>
        <li><a  href="#">Categories</a>
        <?php $categories = DB::table('categories')->get(); ?>
            <div>
            <ul>
               @foreach ($categories as $category)
                <li><a href="#">{{ $category->name }}</a></li>
              @endforeach
            </ul>        
            </div>
        </li>
        <li><a href="#">Shopping Cart</a></li>
        <li><a href="#">Checkout</a></li>
        <li><a href="#">My Account</a>
          <div>
            <ul>
              @if(Auth::check())
              <li><a href="#">My Account</a></li>
              <li><a href="{{ url('auth/logout') }}">Logout</a></li>
              @else
              <li><a href="{{ url('auth/login') }}">Login</a></li>
              <li><a href="{{ url('auth/register') }}">Register</a></li>
              @endif
            </ul>
          </div>
        </li>
        <li><a href="#">Features</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
</header>
<!-- Header End -->