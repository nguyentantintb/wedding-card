@extends('master')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="{{ url('/') }}">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">{{$cate_id->name}}</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>LOẠI THIỆP</span></h2>
            <ul class="nav nav-list categories">
            @foreach($categories as $category)
              <li>
                <a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>
              </li>
            @endforeach
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Sản phẩm nổi bật</span></h2>
            <ul class="bestseller">
            @foreach($featured_products as $key => $featured_product)
              <li>
                <img width="50" height="50" src="/uploads/thumbs/default.jpg" alt="product" title="product">
                <a class="productname" href="product.html">{{ $featured_product->product->name }}</a>
                <span class="procategory">{{ $featured_product->product->category->name }}</span>
                <span class="price">{{ $featured_product->product->price }}.000đ</span>
              </li>
            @endforeach
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Sản phẩm mới</span></h2>
            <ul class="bestseller">
            @foreach($lastest_product as $lastest)
              <li>
                <img width="50" height="50" src="/uploads/thumbs/default.jpg" alt="product" title="product">
                <a class="productname" href="#">{{$lastest->name}}</a>
                <span class="procategory">{{$lastest->category->name}}</span>
                <span class="price">{{$lastest->price}}.000đ</span>
              </li>
            @endforeach
            </ul>
          </div>
     {{--      <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
          <!--End Must have --> --}}
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                  @foreach($productOfcate as $product)
                    <li class="span3">
                      <a class="prdocutname" href="#l">{{ $product->name }}</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="/uploads/thumbs/{{$product->mainphoto}}"></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">{{ $product->price }}</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection
