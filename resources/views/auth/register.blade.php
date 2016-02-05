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
      <li class="active">Register Account</li>
    </ul>
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Erorr!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
    <div class="row">
      <!-- Register Account-->
      <div class="span9">
        <h1 class="heading1"><span class="maintext">Register Account</span><span class="subtext">Register Your details with us</span></h1>
        <form class="form-horizontal" action="{{ url('auth/register') }}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <h3 class="heading3">Your Personal Details</h3>
          <div class="registerbox">
            <fieldset>
              <div class="control-group">
                <label class="control-label"><span class="red">*</span>User Name:</label>
                <div class="controls">
                <input type="text"  class="input-xlarge" name="name" placeholder="Full name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label"><span class="red">*</span> Email:</label>
                <div class="controls">
                  <input type="email"  class="input-xlarge" name="email" placeholder="Email">
                </div>
              </div>


            </fieldset>
          </div>
          <h3 class="heading3">Your Password</h3>
          <div class="registerbox">
            <fieldset>
              <div class="control-group">
                <label  class="control-label"><span class="red">*</span> Password:</label>
                <div class="controls">
                  <input type="password" name="password" class="input-xlarge" placeholder="Your Password">
                </div>
              </div>
              <div class="control-group">
                <label  class="control-label"><span class="red">*</span> LPassword Confirm::</label>
                <div class="controls">
                  <input type="password"  class="input-xlarge" name="password_confirmation" placeholder="Password Confirm">
                </div>
              </div>
            </fieldset>
          </div>
          <div class="pull-right">
            <label class="checkbox inline">
              <input type="checkbox" value="option2" >
            </label>
            I have read and agree to the <a href="#" >Privacy Policy</a>
            &nbsp;
            <input type="Submit" class="btn btn-orange" value="Continue">
          </div>
        </form>
        <div class="clearfix"></div>
        <br>
      </div>
    </div>
  </div>
</section>
</div>
@endsection