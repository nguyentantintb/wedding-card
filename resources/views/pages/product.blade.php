@extends('master')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
       <div class="span5">
        <ul class="thumbnails mainimage">
          <li class="span5">
            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="/uploads/default.jpg">
              <img src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="span5">
            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="/uploads/default.jpg">
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="span5">
            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="/uploads/default.jpg">
              <img src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="span5">
            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="/uploads/default.jpg">
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
        </ul>
        <ul class="thumbnails mainimage">
          <li class="producthtumb">
            <a class="thumbnail" >
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="producthtumb">
            <a class="thumbnail" >
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="producthtumb">
            <a class="thumbnail" >
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
          <li class="producthtumb">
            <a class="thumbnail" >
              <img  src="/uploads/default.jpg" alt="" title="">
            </a>
          </li>
        </ul>
      </div>
      <!-- Right Details-->
      <div class="span7">
        <div class="row">
          <div class="span7">
            <h1 class="productname"><span class="bgnone">My First Simle One Ecommerce template</span></h1>
            <div class="productprice">
              <div class="productpageprice">
                <span class="spiral"></span>${{ $product->price }}</div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="#">Add to Cart</a>
                </li>
              </ul>
              <!-- Product Description tab & comments-->
              <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active">
                    <a href="#description">Description</a>
                  </li>
                </ul>  
                 <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>{{ $product->name }}</h2>
                    {{ $product->description }} <br>
                    <br>
                    <ul class="listoption3">
                    </ul>
                  </div>
                </div>              
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Related Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="/uploads/default.jpg"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="/uploads/default.jpg"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="#">Product Name Here</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="/uploads/default.jpg"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="/uploads/default.jpg"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Popular Brands-->
</div>
@endsection
