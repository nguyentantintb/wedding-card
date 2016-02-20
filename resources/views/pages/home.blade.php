@extends('master')
@section('content')
<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
        @foreach($banner_files as $banner_file)
          <li>
            <img src="{{ $banner_file }}" alt="" />
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </section>
  <!-- Slider End-->

  <!-- Section Start-->
  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>Free shipping</h2>
        All over in world over $200 </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>Easy Payment</h2>
        Payment Gatway support </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>24hrs Shipping</h2>
        Free For UK Customers </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>Over 5000 Choice</h2>
        50,000+ Products </div>
    </div>
  </section>
  <!-- Section End-->

  <!-- Featured Product-->
  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
      <?php $i = 0; ?>
      @foreach($featured_products as $featured_product)
        <li class="span3">
          <a class="prdocutname" href="product.html">{{ $featured_product->product->name }}</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="/uploads/{{ $featured_photo[$i]->title }}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">{{ $featured_product->product->price }}</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      <?php $i++ ; ?>
        @endforeach
         </ul>
    </div>
  </section>

  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
      @foreach($lastest_product as $product)
        <li class="span3">
          <a class="prdocutname" href="product.html">{{ $product->name }}</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="/img/product1a.jpg"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="{!! url('buy-product',[$product->slug]) !!}" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">${{ $product->price }}.000</div>
               
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection
