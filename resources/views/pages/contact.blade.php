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
        <li class="active">Contact</li>
      </ul>
      <!-- Contact Us-->
      <h1 class="heading1"><span class="maintext">Contact</span><span class="subtext"> Contact Us for more</span></h1>
      <div class="row">
        <div class="span9">
          <form action="{{ url('send-contact') }}" class="form-horizontal contactform"  method="POST">
             <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <fieldset>
              <div class="control-group">
                <label for="name" class="control-label">Name <span class="required">*</span></label>
                <div class="controls">
                  <input type="text"  class="required" id="name"  name="name">
                </div>
              </div>
              <div class="control-group">
                <label for="email" class="control-label">Email <span class="required">*</span></label>
                <div class="controls">
                  <input type="email"  class="required email" id="email"  name="email">
                </div>
              </div>
              <div class="control-group">
                <label for="phone" class="control-label">Phone Number</label>
                <div class="controls">
                  <input type="tel"  name="phonenumber" id="phone">
                </div>
              </div>
              <div class="control-group">
                <label for="message" class="control-label">Message</label>
                <div class="controls">
                  <textarea  class="required" rows="6" cols="40" id="message" name="messages"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" value="Send email" id="submit_id">
              </div>
            </fieldset>
          </form>
        </div>

        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>Contact Info</span></h2>
              <p> Lorem Ipsum is simply<br>
                Lorem Ipsum is simply<br>
               Lorem Ipsum is simply<br>
                <br>
                Phone: (012) 333-7890<br>
                Fax: (123) 444-7890<br>
                Email: test@contactus.com<br>
                Web: yourcompanyname.com<br>
              </p>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->

      </div>
    </div>
  </section>
</div>
@endsection