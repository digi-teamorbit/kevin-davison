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
            <img src="{{asset($inner_banner6->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner6->description) ?>
                      
                     
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
<section class="signin">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="login text-center center">
          <h2>Create An Account</h2>
           <form>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="inputEmail4" placeholder="First Name *">
          </div>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="inputEmail4" placeholder="Last Name *">
          </div>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="inputEmail4" placeholder="Company Name (Optional) *">
          </div>
          <div class="form-group col-md-12">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address *">
          </div>
          <div class="form-group col-md-12">
          <input type="password" class="form-control" id="inputPassword4" placeholder="Phone Number *">
          <button> <a href="{{route('log-In')}}">login</a></button>
          <p class="text-muted">OR</p>
          <button class="signin"> <a class="vied" href="{{route('sign-In')}}">SignIn</a></button>
          </div>
          </form>
        </div>
          
        </div>
        <div class="col-md-3">
          
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




