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
        <li class="active"> Shopping Cart</li>
      </ul>
      <h1 class="heading1"><span class="maintext"> Shopping Cart</span><span class="subtext"> All items in your  Shopping Cart</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Hình</th>
            <th class="name">Tên thiệp</th>
            <th class="quantity">Số lượng</th>
              <th class="total">Action</th>
            <th class="price">Giá</th>
            <th class="total">Tổng Cộng</th>

          </tr>
          @foreach($content as $product)
          <tr>
            {{-- <td class="image"><a href="#"><img title="product" alt="product" src="/uploads/{!! $product['options','img'] !!}" height="50" width="50"></a></td> --}}
            <td class="image"><a href="#"><img title="product" alt="product" src="/uploads/{!! $product->options->img !!}" height="50" width="50"></a></td>
            
            <td  class="name"><a href="#">{!! $product->name !!}</a></td>

            <td class="quantity"><input type="number" size="1" value="1" name="quantity[40]" class="span1">

             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="{!! url('romove-product',['id'=>$product['rowid']]) !!}"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>


            <td class="price">{!! number_format($product["price"],0,",",".") !!}</td>
            <td class="total">{!! number_format($product["price"],0,",",".") !!}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              {{-- <tr>
                <td><span class="extra bold">Sub-Total :</span></td>
                <td><span class="bold">$101.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">Eco Tax (-5.00) :</span></td>
                <td><span class="bold">$11.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (18.2%) :</span></td>
                <td><span class="bold">$21.0</span></td>
              </tr> --}}
              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">${!! $total !!}</span></td>
              </tr>
            </table>
            <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
            <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
          </div>
        </div>
        </div>
    </div>
  </section>
</div>
@endsection