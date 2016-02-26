@extends('master')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Checkout</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="span9">
          <div class="checkoutsteptitle">Step 1 : Delivery Details<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="row">
              <form class="form-horizontal">
                <fieldset>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >First Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Last Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Telephone<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Fax</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <a class="btn btn-orange pull-right">Continue</a>
          </div>
          <div class="checkoutsteptitle">Step 2: Confirm Order<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
             <form method="POST" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="image">Image</th>
                  <th class="name">Product Name</th>
                  <th class="quantity">Quantity</th>
                  <th class="price">Unit Price</th>
                  <th class="total">Total</th>
                </tr>
                @foreach($content as $product)
                <tr>
            {{-- <td class="image"><a href="#"><img title="product" alt="product" src="/uploads/{!! $product['options','img'] !!}" height="50" width="50"></a></td> --}}
            <td class="image"><a href="#"><img title="product" alt="product" src="/uploads/{!! $product->options->img !!}" height="50" width="50"></a></td>

            <td  class="name"><a href="#">{!! $product->name !!}</a></td>

            <td class="quantity"><input class="qty" type="number" size="1" value="{{ $product->qty }}" name="quantity[40]" class="span1">

            </td>
            <td class="total"> <a href="#" id="{{ $product->rowid }} " class="updateQty"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="{!! url('romove-product',['id'=>$product['rowid']]) !!}"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>


              <td class="price">{!! number_format($product["price"],0,",",".") !!}</td>
              <td class="total">{!! number_format($product["price"],0,",",".")*$product->qty !!}</td>
            </tr>
            @endforeach
                </table>
              </form>
            </div>
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>
                        <td><span class="extra bold totalamout">Total :</span></td>
                        <td><span class="bold totalamout">$120.68</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span> Checkout Steps</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a class="active" href="#">Checkout Options</a>
                </li>
                <li>
                  <a href="#">Billing Details</a>
                </li>
                <li>
                  <a href="#">Delivery Details</a>
                </li>
                <li>
                  <a href="#">Delivery Method</a>
                </li>
                <li>
                  <a href="#"> Payment Method</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
@endsection
