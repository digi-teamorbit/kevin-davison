@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- banner section start here -->
    <!-- Begin: Crousel -->
    <div class="main-slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  data-interval="false" autoplay="false">
        <!-- Indicators -->
        <!--   <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{asset($inner_banner10->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner10->description) ?>
                      
                     
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <!--   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>  -->
    </div>



<section class="inner-cart">
  <div class="container">
    <div class="check-form">
      <div class="row">
        <div class="col-md-7 col-sm-7 col-xs-12">
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="return-custmer"> <a class="herelog" href="#">Returning customer? Click here to login</a> </div>
                </div>
                <div class="form-group">
                  <div class="return-custmer"> <a class="herelog" href="#">Have a coupon? Click here to enter your code</a> </div>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Country" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="First Name" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Last Name" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Company Name" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Address" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Town / City" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Country" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Phone" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Email" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Postcode" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" value="">
                    Create an account</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Order Note" rows="10"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" value="">
                    Ship to another address</label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
          <div class="check_detail">
            <div class="first">
              <h3>product name</h3>
              <h4>product name goes here<span>$99.00</span></h4>
              <h4>product name goes here<span>$99.00</span></h4>
              <h4>product name goes here<span>$99.00</span></h4>
            </div>
            <h3>item subtotal <span>$297.00</span></h3>
            <h3>your shipping <span>free</span></h3>
            <h3>total price <span>$297.00</span></h3>
            <form class="round-one">
              <input name="gender" type="radio" value="male">
              Stripe <img alt="" class="img-responsive" src="{{asset('images/img25.png')}}">
            </form>
            <form class="round-one round-two">
              <input name="gender" type="radio" value="male">
              Paypal <img alt="" class="img-responsive" src="{{asset('images/img26.png')}}">
            </form>
            <div class="read-agre">
              <div class="form-group">
                <label class="checkbox-inline">
                  <input type="checkbox" value="">
                  I have read and agree to the website terms and conditions *</label>
              </div>
            </div>
            <button class="hvr-wobble-skew">place order</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')

<script>
    $('#Testimonials').owlCarousel({
    
    loop:true,
    slideBy: 1,
    items: 2,
    itemsDesktop : [1199, 2]
    });
    
    </script>
    <script src="js/jQuery.scrollSpeed.js"></script>
    <script>
    $(function() {
    jQuery.scrollSpeed(100, 1200);
    });
    </script>
    <script type="text/javascript">
    $('.most-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    });
    </script>
    <script>
    $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    });
    </script>
    

@endsection




