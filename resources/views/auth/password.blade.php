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
        <li class="active">Login</li>
      </ul>
      
      <!-- Account Login-->
      <div class="row">
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Login</span><span class="subtext">First Login here to View All your account information</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">New Customer </h2>
            <div class="loginbox">
              <h4 class="heading4"> Register Account</h4>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <br>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <br>
              <br>
              <a href="{{ url('auth/register') }}" class="btn btn-orange">Continue</a>
            </div>
          </section>
          <section class="returncustomer">
          <h2 class="heading2">Reset Password </h2>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Erorr!</strong> There were some problems with your input.
              <br>
              <br>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif @if  (session('status'))
            <div class="alert alert-success">
             {{ session('status') }}
           </div>
           @endif
           <form class="form-vertical" action="{{ url('password/email') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <fieldset>
              <div class="control-group">
                <label  class="control-label">E-Mail Address:</label>
                <div class="controls">
                  <input type="email"  class="span3" name="email">
                </div>
              </div>
              <button type="submit" class="btn btn-orange">Send</button>
            </fieldset>
          </form>
        </div>
      </section>
    </div>

    <!-- Sidebar Start-->
    <aside class="span3">
      <div class="sidewidt">
        <h2 class="heading2"><span>Account</span></h2>
        <ul class="nav nav-list categories">
          <li>
            <a href="#"> My Account</a>
          </li>
          <li>
            <a href="#">Edit Account</a>
          </li>
          <li>
            <a href="#">Password</a>
          </li>
          <li>
            <a href="#">Wish List</a>
          </li>
          <li><a href="#">Order History</a>
          </li>
          <li><a href="#">Downloads</a>
          </li>
          <li><a href="#">Returns</a>
          </li>
          <li>
            <a href="#"> Transactions</a>
          </li>
          <li>
            <a href="#">Newsletter</a>
          </li>
          <li>
            <a href="#">Logout</a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- Sidebar End-->
  </div>
</div>
</section>
</div>

@endsection