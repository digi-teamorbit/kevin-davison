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
            <img src="{{asset($inner_banner4->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner4->description) ?>
                      
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <section class="contact-us">
      <div class="container">
        <div class="row">
          <h3>Get in Touch with Us</h3>
          <form method="post" action="{{route('contactUsSubmit')}}">
            @csrf
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-6">
                <div class="getin">
                  <div class="form-group">
                    <input id="fname" name="fname" type="text" class="form-control @error('fname') is-danger @enderror" placeholder="First Name" required="">
                    <i class="fa fa-user"></i>
                    @error('fname')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('fname') }}</p>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <input id="lname" name="lname" type="text" class="form-control @error('lname') is-danger @enderror" placeholder="Last Name" required="">
                    <i class="fa fa-user"></i>
                    @error('lname')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('lname') }}</p>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <input id="email" name="email" type="text" class="form-control @error('email') is-danger @enderror" placeholder="Email" required="">
                    <i class="fa fa-envelope"></i>
                    @error('email')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number">
                    <i class="fa fa-phone"></i>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="text-area">
                  <div class="form-group">
                    <textarea name="message" id="message" class="form-control @error('message') is-danger @enderror" cols="30" rows="12" placeholder="How Can We Help you?" required=""></textarea>
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    @error('message')
                                  <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
                                  @enderror

                  </div>
                  
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div>
                  <button class="btn-sub">Subtmit Now</button>
                </div>
              </div>
            </div>
          </div>
          </form>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="main-add-sec">
              <div class="mapsec">
                
                <iframe src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <div class="main-icon-inner">
                <ul>
                  <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}"><i class="fa fa-map-marker"></i>{{App\Http\Traits\HelperTrait::returnFlag(519) }}</a></li>
                  <li><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-phone"></i>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
                  <li><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"><i class="fa fa-envelope"></i>{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
                </ul>
              </div>
            </div>
            <div class="line-icone">
              <p> FOLLOW US:</p>
              <ul class="list-inline">
               
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <!-- <li><a href=""><i class="fa fa-google-plus"></i></a></li> -->
              </ul>
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




